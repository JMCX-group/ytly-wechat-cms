<?php

namespace App\Http\Controllers;

class ClassController extends Controller
{
    /**
     * 获取用户信息
     *
     * @return array
     */
    public function getUserInfo()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料

        if (isset($user)) {
            /**
             * 获取用户信息：
             */
            $user_info = [
                'user_name' => $user->nickname,
                'user_avatar' => $user->avatar
            ];
        } else {
            $user_info = null;
        }

        return $user_info;
    }

    /**
     * 第一次demo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function art()
    {
        $user_info = $this->getUserInfo();

        return view('demo.art', compact('user_info'));
    }

    /**
     * 第二次demo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function academic()
    {
        $user_info = $this->getUserInfo();

        $imgBaseUrl = '/assets/images/class-content/academic/';

        $data = [
            [
                'imgUrl' => $imgBaseUrl . 'hundredth.png',
                'txtTitle' => 'Hundredth',
                'txtContent' => ' [ˈhʌndrədθ] n. 百分之一',
                'isBr' => false
            ],
            [
                'imgUrl' => $imgBaseUrl . 'tenths.png',
                'txtTitle' => 'Tenths',
                'txtContent' => ' [tenθ] n. 十分之一',
                'isBr' => false
            ],
            [
                'imgUrl' => $imgBaseUrl . 'decimal-point.png',
                'txtTitle' => 'Decimal point',
                'txtContent' => ' [ˈdesiməl pɔint] n.小数点',
                'isBr' => false
            ],
            [
                'imgUrl' => $imgBaseUrl . 'ones.png',
                'txtTitle' => 'Ones',
                'txtContent' => ' [\'wʌnz] n. 个位',
                'isBr' => false
            ],
            [
                'imgUrl' => $imgBaseUrl . 'tens.png',
                'txtTitle' => 'Tens',
                'txtContent' => ' [\'tenz] n. 十位',
                'isBr' => false
            ],

            [
                'imgUrl' => $imgBaseUrl . 'hundreds.png',
                'txtTitle' => 'Hundreds',
                'txtContent' => ' [\'hʌndrədz] n. 百位',
                'isBr' => false
            ],
            [
                'imgUrl' => $imgBaseUrl . 'thousands.png',
                'txtTitle' => 'Thousands',
                'txtContent' => ' [\'θaʊzndz] n. 千位',
                'isBr' => false
            ],
            [
                'imgUrl' => $imgBaseUrl . 'tens-of-thousands.png',
                'txtTitle' => 'Tens of thousands',
                'txtContent' => ' [\'tenz,əv\'θaʊzndz] n. 万位',
                'isBr' => true
            ],
            [
                'imgUrl' => $imgBaseUrl . 'hundreds-of-thousands.png',
                'txtTitle' => 'Hundreds of thousands',
                'txtContent' => ' [\'\'hʌndrədz,əv\'θaʊzndz] n. 十万位',
                'isBr' => true
            ],
            [
                'imgUrl' => $imgBaseUrl . 'millions.png',
                'txtTitle' => 'Millions',
                'txtContent' => ' [\'mɪlɪənz] n. 百万位',
                'isBr' => false
            ],

            [
                'imgUrl' => $imgBaseUrl . 'place-value.png',
                'txtTitle' => 'five millions three hundreds and twenty thousands seven hundreds and eighty-six point four one',
                'txtContent' => '5,320,786.41',
                'isBr' => true,
                'last' => true
            ]
        ];

        return view('demo.academic', compact('user_info', 'data'));
    }
}
