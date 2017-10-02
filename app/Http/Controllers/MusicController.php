<?php

namespace App\Http\Controllers;

use App\MusicLibrary;
use Illuminate\Http\Request;

class MusicController extends Controller
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
    public function candy()
    {
        $user_info = $this->getUserInfo();

        return view('musics.candy-fairy-dance', compact('user_info'));
    }

    /**
     * 第二次demo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function symphonyOrchestra()
    {
        $user_info = $this->getUserInfo();
        $imgBaseUrl = '/assets/images/audio-avatar/';

        $part2Data1 = [
            [
                'txt1' => '[英]',
                'txt2' => 'symphony',
                'txt3' => '[ˈsɪmfəni]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'симфоническая музыка',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '交響曲',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '오케스트라',
                'txt3' => '(外来词)',
                'txt4' => '교향악',
                'txt5' => '(汉字词)',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data2 = [
            [
                'txt1' => '[英]',
                'txt2' => 'symphony orchestra',
                'txt3' => '[ˈsɪmfəni ˈɔ:rkɪstrə]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'симфонический оркестр',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '交響樂団',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '교향악단. 심포니오케스트라',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data3 = [
            [
                'txt1' => '[美]',
                'txt2' => 'string section',
                'txt3' => '[strɪŋ] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'струнные инструменты',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '弦楽',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '현악',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data4 = [
            [
                'txt1' => '[美]',
                'txt2' => 'woodwind section',
                'txt3' => '[ˈwʊdwɪnd] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'деревянные духовые инструменты',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '木管もっかん',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '목관',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data5 = [
            [
                'txt1' => '[美]',
                'txt2' => 'brass section',
                'txt3' => '[bræs] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'медные духовые инструменты',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '金管きんかん',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '동관',
                'txt3' => '(汉字词)',
                'txt4' => '브라스',
                'txt5' => '(外来词)',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data6 = [
            [
                'txt1' => '[美]',
                'txt2' => 'percussion section',
                'txt3' => '[pərˈkʌʃn] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'ударные  инструменты',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => 'パーカッション だがっき打樂器',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '타악팀',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data7 = [
            [
                'txt1' => '[美]',
                'txt2' => 'conductor',
                'txt3' => '[kənˈdʌktɚ]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'дирижёр',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '指揮　しき',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '지휘자',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data8 = [
            [
                'txt1' => '[美]',
                'txt2' => 'music',
                'txt3' => '[ˈmjuzɪk]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'музыка',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '音楽',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '음악',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part2Data9 = [
            [
                'txt1' => '[美]',
                'txt2' => 'concert',
                'txt3' => '[ˈkɑ:nsərt]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => '[俄]',
                'txt2' => 'концерт',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
            ],
            [
                'txt1' => '[日]',
                'txt2' => '音楽會',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
            ],
            [
                'txt1' => '[韩]',
                'txt2' => '음악회',
                'txt3' => '',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
            ]
        ];

        $part3Data = [
            [
                'txt1' => 'A: 你平时喜欢听音乐吗？',
                'txt2' => '[美]A: Do you like listening to music?',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'B: 是的。',
                'txt2' => '[美]B: Yeah.',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'A: 我知道今晚有一场海顿交响作品音乐会。想一起去吗？',
                'txt2' => '[美]A: I know there is a Haydn’s symphonies concert tonight. Do you want to go with me?',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'B: 哇,听起来好棒！那交响乐团是由什么乐器组成的？',
                'txt2' => '[美]B: Wow, sounds terrific! What are the instruments included in the symphony orchestra?',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'A: 是由弦乐、木管、铜管、打击乐组成的。指挥是乐团的老大！',
                'txt2' => '[美]A: A symphony orchestra is composed of string section, woodwind section, brass section and percussion section. And the conductor is the boss!',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ]
        ];

        return view('musics.symphony-orchestra', compact(
            'user_info',
            'part2Data1', 'part2Data2', 'part2Data3', 'part2Data4', 'part2Data5',
            'part2Data6', 'part2Data7', 'part2Data8', 'part2Data9', 'part3Data'
        ));
    }

    /**
     * 第三次demo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function symphonyOrchestra2()
    {
        $user_info = $this->getUserInfo();
        $imgBaseUrl = '/assets/images/audio-avatar/';

        $part2Data1 = [
            [
                'txt1' => '[英]',
                'txt2' => 'symphony',
                'txt3' => '[ˈsɪmfəni]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'симфоническая музыка',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '交響曲',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '오케스트라',
//                'txt3' => '(外来词)',
//                'txt4' => '교향악',
//                'txt5' => '(汉字词)',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data2 = [
            [
                'txt1' => '[英]',
                'txt2' => 'symphony orchestra',
                'txt3' => '[ˈsɪmfəni ˈɔ:rkɪstrə]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'симфонический оркестр',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '交響樂団',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '교향악단. 심포니오케스트라',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data3 = [
            [
                'txt1' => '[美]',
                'txt2' => 'string section',
                'txt3' => '[strɪŋ] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'струнные инструменты',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '弦楽',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '현악',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data4 = [
            [
                'txt1' => '[美]',
                'txt2' => 'woodwind section',
                'txt3' => '[ˈwʊdwɪnd] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'деревянные духовые инструменты',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '木管もっかん',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '목관',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data5 = [
            [
                'txt1' => '[美]',
                'txt2' => 'brass section',
                'txt3' => '[bræs] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'медные духовые инструменты',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '金管きんかん',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '동관',
//                'txt3' => '(汉字词)',
//                'txt4' => '브라스',
//                'txt5' => '(外来词)',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data6 = [
            [
                'txt1' => '[美]',
                'txt2' => 'percussion section',
                'txt3' => '[pərˈkʌʃn] [ˈsɛkʃən]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'ударные  инструменты',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => 'パーカッション だがっき打樂器',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '타악팀',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data7 = [
            [
                'txt1' => '[美]',
                'txt2' => 'conductor',
                'txt3' => '[kənˈdʌktɚ]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'дирижёр',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '指揮　しき',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '지휘자',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data8 = [
            [
                'txt1' => '[美]',
                'txt2' => 'music',
                'txt3' => '[ˈmjuzɪk]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'музыка',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '音楽',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '음악',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part2Data9 = [
            [
                'txt1' => '[美]',
                'txt2' => 'concert',
                'txt3' => '[ˈkɑ:nsərt]',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
//            [
//                'txt1' => '[俄]',
//                'txt2' => 'концерт',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-2.png'
//            ],
//            [
//                'txt1' => '[日]',
//                'txt2' => '音楽會',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-3.png'
//            ],
//            [
//                'txt1' => '[韩]',
//                'txt2' => '음악회',
//                'txt3' => '',
//                'imgUrl' => $imgBaseUrl . 'avatar-0512-4.png'
//            ]
        ];

        $part3Data = [
            [
                'txt1' => 'A: 你平时喜欢听音乐吗？',
                'txt2' => '[美]A: Do you like listening to ',
                'txt3' => 'music',
                'txt4' => '?',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'B: 是的。',
                'txt2' => '[美]B: Yeah.',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'A: 我知道今晚有一场海顿交响作品音乐会。想一起去吗？',
                'txt2' => '[美]A: I know there is a Haydn’s symphonies ',
                'txt3' => 'concert',
                'txt4' => ' tonight. Do you want to go with me?',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'B: 哇,听起来好棒！那交响乐团是由什么乐器组成的？',
                'txt2' => '[美]B: Wow, sounds terrific! What are the instruments included in the ',
                'txt3' => 'symphony orchestra',
                'txt4' => '?',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ],
            [
                'txt1' => 'A: 是由弦乐、木管、铜管、打击乐组成的。指挥是乐团的老大！',
                'txt2' => '[美]A: A ',
                'txt3' => 'symphony orchestra',
                'txt4' => ' is composed of ',
                'txt5' => 'string section, woodwind section, brass section',
                'txt6' => ' and ',
                'txt7' => 'percussion section',
                'txt8' => '. And the conductor is the boss!',
                'imgUrl' => $imgBaseUrl . 'avatar-0512-1.png'
            ]
        ];

        return view('musics.symphony-orchestra-2', compact(
            'user_info',
            'part2Data1', 'part2Data2', 'part2Data3', 'part2Data4', 'part2Data5',
            'part2Data6', 'part2Data7', 'part2Data8', 'part2Data9', 'part3Data'
        ));
    }

    public function convertHtml($txt)
    {

    }

    /**
     * Fel's demo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fel()
    {
        $user_info = $this->getUserInfo();

        return view('musics.fel', compact('user_info'));
    }

    /**
     * Service for qr.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function qr(Request $request)
    {
        $id = $request->get('id');
        $data = MusicLibrary::where('unsigned_name', $id)->first();

        $user_info = $this->getUserInfo();

        $musicData = [
            'title' => $data['m_title'],
            'content' => explode("。", chop($data['m_content'], "。")) //使用句号分隔成数组
        ];

        $player = [
            'title' => $data['p_title'],
            'author' => $data['p_author'],
            'url' => $data['p_url'], // '/audios/musics/candy-fairy-dance.mp3'
            'pic' => '/assets/images/music/' . $data['unsigned_name']. '.png' //'/assets/images/music/candy-fairy-dance.png'
        ];

        return view('musics.qr', compact('user_info', 'player', 'musicData', 'id'));
    }
}
