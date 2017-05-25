<?php

namespace App\Http\Controllers;

use App\Http\Helper\EasyWeChat;
use EasyWeChat\Foundation\Application;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WxPayController extends Controller
{
    /**
     * 微信支付回調函數
     */
    public function notifyUrl()
    {
        $wxData = (array)simplexml_load_string(file_get_contents('php://input'), 'SimpleXMLElement', LIBXML_NOCDATA);
        Log::info('wechat-notify', ['context' => json_encode($wxData)]);
        if ($wxData['return_code'] == 'SUCCESS' && $wxData['result_code'] == 'SUCCESS') {
            echo 'SUCCESS';
        } else {
            echo 'FAIL';
        }

        $app = new Application(EasyWeChat::getPayOptions());
        $response = $app->payment->handleNotify(function ($notify, $successful) {
            Log::info('wechat-notify-easy', ['context' => json_encode($notify), 'status' => $successful]);

//            // 使用通知里的 "微信支付订单号" 或者 "商户订单号" 去自己的数据库找到订单
//            $order = 查询订单($notify->out_trade_no);
//            if (!$order) { // 如果订单不存在
//                return 'Order not exist.'; // 告诉微信，我已经处理完了，订单没找到，别再通知我了
//            }
//            // 如果订单存在
//            // 检查订单是否已经更新过支付状态
//            if ($order->paid_at) { // 假设订单字段“支付时间”不为空代表已经支付
//                return true; // 已经支付成功了就不再更新了
//            }
//            // 用户是否支付成功
//            if ($successful) {
//                // 不是已经支付状态则修改为已经支付状态
//                $order->paid_at = time(); // 更新支付时间为当前时间
//                $order->status = 'paid';
//            } else { // 用户支付失败
//                $order->status = 'paid_fail';
//            }
//            $order->save(); // 保存订单
            return true; // 返回处理完成
        });

        return $response;
    }

    /**
     * 获取Qr Code
     */
    public function getQrCode()
    {
        $data = 'weixin://wxpay/bizpayurl?appid=wx2421b1c4370ec43b&mch_id=1471053502&nonce_str=jumengchuangxin2017yitongliuyi&product_id=20170525&time_stamp=1495691065&sign=32DC6CF5E99753C0FB1694B497A18965';

        QrCode::format('png')->size(200)->generate($data, 'qrcode/20170525.png');
    }

    /**
     * 生成签名
     */
    public function getSign()
    {
        $data['appid'] = env('WECHAT_APPID');
        $data['mch_id'] = env('WECHAT_MCH_ID');
        $data['nonce_str'] = 'jumengchuangxin2017yitongliuyi';
        $data['product_id'] = '20170525';
        $data['timestamp'] = '1495691065';

        echo $this->wxMd5Sign($data);
    }

    /**
     * MD5
     *
     * @param $data
     * @return string
     */
    public function wxMd5Sign($data)
    {
        $content = '';
        foreach ($data as $key => $value) {
            if ($content != '') {
                $content .= '&' . $key . '=' . $value;
            } else {
                $content = $key . '=' . $value;
            }
        }

        try {
            if (is_null($content)) {
                throw new \Exception('财付通签名内容不能为空');
            }
            $signStr = $content . '&key=' . env('WECHAT_API_KEY');

            return strtoupper(md5($signStr));
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
