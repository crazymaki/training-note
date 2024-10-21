<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExercisesMaster;

class ExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises_master = [
            [
                'exercise_name' => 'ベンチプレス',
                'category_id' => 1,
                'description' => 'バーベルを使って横になり、胸を広げながら重りを持ち上げるトレーニング。大胸筋を主に刺激する。',
            ],
            [
                'exercise_name' => 'ダンベルフライ',
                'category_id' => 1,
                'description' => 'ダンベルを持ちながら横になり、腕を大きく広げて戻すトレーニング。胸の中央部を重点的に刺激する。',
            ],
            [
                'exercise_name' => 'プルアップ',
                'category_id' => 1,
                'description' => '上体を引き上げるトレーニング。胸部の上部と広背筋を鍛える。',
            ],
            [
                'exercise_name' => 'ディップス',
                'category_id' => 1,
                'description' => '両手をバーに掴んで、上下に動かすトレーニング。胸部と三頭筋を刺激する。',
            ],
            [
                'exercise_name' => 'ロウイング（バーベルまたはダンベル）',
                'category_id' => 1,
                'description' => 'バーベルまたはダンベルを使って上体を引き寄せるトレーニング。広背筋と中背筋を刺激する。',
            ],
            [
                'exercise_name' => 'バーベルカール',
                'category_id' => 1,
                'description' => 'バーベルを使って腕を曲げるトレーニング。上腕二頭筋を中心に刺激する。',
            ],
            [
                'exercise_name' => 'ハンマーカール（ダンベル）',
                'category_id' => 1,
                'description' => 'ダンベルを使って腕を曲げるが、手首の動きが特徴のトレーニング。上腕二頭筋を中心に刺激する。',
            ],
            [
                'exercise_name' => 'トライセプスディップス',
                'category_id' => 1,
                'description' => '両手をバーに掴んで上下に動かし、トライセプスを刺激するトレーニング。',
            ],
            [
                'exercise_name' => 'プッシュアップ',
                'category_id' => 1,
                'description' => '床に対して水平に体を持ち上げるトレーニング。胸部と三頭筋を刺激する。',
            ],
            [
                'exercise_name' => 'ピンクライン（Chest Fly Machine）',
                'category_id' => 1,
                'description' => 'マシンを使ったフライ運動。胸の中央部を重点的に刺激する。',
            ],
            [
                'exercise_name' => 'ラットプルダウン',
                'category_id' => 1,
                'description' => 'ラットプルダウンマシンを使用して上半身を引き下ろすトレーニング。広背筋を刺激する。',
            ],
            [
                'exercise_name' => 'インクラインベンチプレス',
                'category_id' => 1,
                'description' => '傾斜したベンチを使用して行うベンチプレス。上部胸部を重点的に刺激する。',
            ],
            [
                'exercise_name' => 'ケーブルクロスオーバー',
                'category_id' => 1,
                'description' => 'ケーブルマシンを使用して、斜めに腕を引き寄せるトレーニング。胸の中央部を重点的に刺激する。',
            ],
            [
                'exercise_name' => 'マシンフライ',
                'category_id' => 1,
                'description' => 'マシンを使用して行うフライ運動。胸の中央部を重点的に刺激する。',
            ],
            [
                'exercise_name' => 'チェストプレス',
                'category_id' => 1,
                'description' => 'マシンを使用して広背筋と胸部を同時に刺激するトレーニング。',
            ],
            [
                'exercise_name' => 'スタンスデッドリフト',
                'category_id' => 2,
                'description' => '足を肩幅に開き、バーを持ち上げるデッドリフトのバリエーション。全身の筋肉を効果的に刺激する。',
            ],
            [
                'exercise_name' => 'ローマンデッドリフト',
                'category_id' => 2,
                'description' => '膝を軽く曲げた状態で前傾し、ハムストリングスや腰の筋肉を重点的に刺激するデッドリフトのバリエーション。',
            ],
            [
                'exercise_name' => 'ストレートレッグデッドリフト',
                'category_id' => 2,
                'description' => '膝を伸ばした状態で前傾し、ハムストリングスと腰の筋肉を刺激するデッドリフトのバリエーション。',
            ],

            // 垂直引き
            [
                'exercise_name' => 'プルアップ',
                'category_id' => 2,
                'description' => '上向きのバーにつかまり、体を引き上げるトレーニング。広背筋と二頭筋を刺激する。',
            ],
            [
                'exercise_name' => 'チンアップ',
                'category_id' => 2,
                'description' => '逆向きのバーにつかまり、体を引き上げるトレーニング。広背筋と二頭筋を刺激する。',
            ],
            [
                'exercise_name' => 'ラットプルダウン',
                'category_id' => 2,
                'description' => '上部に取り付けたラットプルダウンマシンでバーを引き下ろすトレーニング。広背筋を刺激する。',
            ],
            [
                'exercise_name' => 'フロントラットプルダウン',
                'category_id' => 2,
                'description' => '前方からバーを引き下ろすラットプルダウンのバリエーション。広背筋を中心に刺激する。',
            ],
            [
                'exercise_name' => 'ワイドグリップラットプルダウン',
                'category_id' => 2,
                'description' => '広いグリップでバーを引き下ろすトレーニング。広背筋の外側を重点的に刺激する。',
            ],
            [
                'exercise_name' => 'リバースラットプルダウン',
                'category_id' => 2,
                'description' => '後ろ向きに座り、バーを引き下ろすトレーニング。中背筋と上部広背筋を刺激する。',
            ],

            // 横引き
            [
                'exercise_name' => 'バーベルロウ',
                'category_id' => 2,
                'description' => 'バーベルを持ち上げて引くトレーニング。中背筋と広背筋を刺激する。',
            ],
            [
                'exercise_name' => 'ペンドレイロウ',
                'category_id' => 2,
                'description' => 'ペンドラムのような形でバーベルを引き上げるトレーニング。広背筋を刺激する。',
            ],
            [
                'exercise_name' => 'ハンマーストレングスマシン',
                'category_id' => 2,
                'description' => 'ハンマーストレングスマシンを使用して背中を引き上げるトレーニング。中背筋を刺激する。',
            ],

            // フェイスプル
            [
                'exercise_name' => 'ケーブルフェイスプル',
                'category_id' => 2,
                'description' => 'ケーブルマシンを使用して、顔の高さまでロープを引き寄せるトレーニング。上部広背筋を刺激する。',
            ],
            [
                'exercise_name' => 'バンドフェイスプル',
                'category_id' => 2,
                'description' => 'バンドを使用して、フェイスプルの動きを模倣するトレーニング。上背筋と三角筋を刺激する。',
            ],

            // 補助トレーニング
            [
                'exercise_name' => 'ワンアームダンベルロウ',
                'category_id' => 2,
                'description' => '片手にダンベルを持ち、反対の膝と手をベンチにつきながらロウを行うトレーニング。中背筋と広背筋を刺激する。',
            ],
            [
                'exercise_name' => 'ハイパーエクステンション',
                'category_id' => 2,
                'description' => 'ハイパーエクステンションマシンを使用して背中の伸展を行うトレーニング。腰と中背筋を刺激する。',
            ],
            [
                'exercise_name' => 'プレーンプル',
                'category_id' => 2,
                'description' => 'ロープを使用して、プルダウンを斜めに行うトレーニング。上背筋と三角筋を刺激する。',
            ],
            [
                'exercise_name' => 'ローププレーンプル',
                'category_id' => 2,
                'description' => 'ロープを使用して下から上に引き寄せるプルダウンのバリエーション。上背筋を刺激する。',
            ],
            [
                'exercise_name' => 'ハイローププレーンプル',
                'category_id' => 2,
                'description' => 'ロープを使用して上から下に引き寄せるプルダウンのバリエーション。上背筋と三角筋を刺激する。',
            ],
            [
                'exercise_name' => 'スタンディングバーベルカール',
                'category_id' => 3,
                'description' => '立位でバーベルを使用して上腕二頭筋を鍛えるトレーニング。',
            ],
            [
                'exercise_name' => 'アルタネーティングダンベルカール',
                'category_id' => 3,
                'description' => '交互にダンベルを上げ下げすることで、上腕二頭筋を効果的に刺激するトレーニング。',
            ],
            [
                'exercise_name' => 'ハンマーカール',
                'category_id' => 3,
                'description' => 'ハンマーのように握り、上腕二頭筋と前腕筋を同時に鍛えるトレーニング。',
            ],
            [
                'exercise_name' => 'バーベルプリーチャーカール',
                'category_id' => 3,
                'description' => 'プリーチャーベンチを使用してバーベルで上腕二頭筋を鍛えるトレーニング。',
            ],
            [
                'exercise_name' => 'インクラインベンチでのコンセントレーションカール',
                'category_id' => 3,
                'description' => '傾斜ベンチを使用して、コンセントレーションカールを行うトレーニング。',
            ],

            // 上腕三頭筋 (Triceps)
            [
                'exercise_name' => 'ロープトライセプスプッシュダウン',
                'category_id' => 3,
                'description' => 'ケーブルマシンを使用して、トライセプスを効果的に鍛えるトレーニング。',
            ],
            [
                'exercise_name' => 'スタンディングダンベルトライセプスエクステンション',
                'category_id' => 3,
                'description' => '立位でダンベルを使用して上腕三頭筋を鍛えるトレーニング。',
            ],
            [
                'exercise_name' => '体重を使用した平行棒ディップス',
                'category_id' => 3,
                'description' => '平行棒を使用してトライセプスを鍛える体重トレーニング。',
            ],
            [
                'exercise_name' => 'ダンベルオーバーヘッドトライセプスエクステンション',
                'category_id' => 3,
                'description' => 'ダンベルを頭の後ろで上げ下げしてトライセプスを刺激するトレーニング。',
            ],
            [
                'exercise_name' => 'クローズグリップバーベルベンチプレス',
                'category_id' => 3,
                'description' => 'バーベルベンチプレスで手を寄せ、トライセプスを強く刺激するトレーニング。',
            ],
            [
                'exercise_name' => 'バックスクワット',
                'category_id' => 4,
                'description' => 'バーベルを肩の後ろに載せて行うスクワット。大腿四頭筋を中心に鍛える。',
            ],
            [
                'exercise_name' => 'フロントスクワット',
                'category_id' => 4,
                'description' => 'バーベルを肩の前に載せて行うスクワット。大腿四頭筋とコアを強化する。',
            ],
            [
                'exercise_name' => 'ウォーキングランジ',
                'category_id' => 4,
                'description' => '前進または後退しながら行うランジ。大腿四頭筋とハムストリングスをトレーニングする。',
            ],
            // ... 他の大腿四頭筋のトレーニング

            // ハムストリングス (Hamstrings)
            [
                'exercise_name' => 'スタンスデッドリフト',
                'category_id' => 4,
                'description' => '立位でバーベルを前に垂直に保ちながら行うデッドリフト。ハムストリングスを効果的に刺激する。',
            ],
            [
                'exercise_name' => 'スタンディングレッグカール',
                'category_id' => 4,
                'description' => '立位で行うレッグカール。ハムストリングスを中心に鍛える。',
            ],
            [
                'exercise_name' => 'バーベルヒップスラスト',
                'category_id' => 4,
                'description' => '背中をベンチに寄せ、ヒップを上げ下げするトレーニング。臀筋とハムストリングスを刺激する。',
            ],
            // ... 他のハムストリングスのトレーニング

            // 臀筋 (Glutes)
            [
                'exercise_name' => 'スタンディングカーフレイズ',
                'category_id' => 4,
                'description' => '立位で行うカーフレイズ。腓腹筋を刺激する。',
            ],
            [
                'exercise_name' => 'バンドヒップスラスト',
                'category_id' => 4,
                'description' => 'バンドを使用して行うヒップスラスト。臀筋とハムストリングスを強化する。',
            ],
            // ... 他の臀筋のトレーニング

            // 腓腹筋 (Calves)
            [
                'exercise_name' => 'バーベルスタンディングカーフレイズ',
                'category_id' => 4,
                'description' => 'バーベルを使用して立位で行うカーフレイズ。腓腹筋を強化する。',
            ],
            [
                'exercise_name' => 'マシン使用のシーテッドカーフレイズ',
                'category_id' => 4,
                'description' => 'カーフレイズマシンを使用して行うシーテッドカーフレイズ。腓腹筋を中心に鍛える。',
            ],
            [
                'exercise_name' => 'バーベルオーバーヘッドプレス',
                'category_id' => 5,
                'description' => '立位でバーベルを上方に押し上げるトレーニング。三角筋前部を強化する。',
            ],
            [
                'exercise_name' => 'ダンベルサイドレイズ',
                'category_id' => 5,
                'description' => '横に広げた両手にダンベルを持ち上げるトレーニング。三角筋中部を刺激する。',
            ],
            [
                'exercise_name' => 'ダンベルフロントレイズ',
                'category_id' => 5,
                'description' => '前方に持ち上げたダンベルで肩を前方に引き上げるトレーニング。三角筋前部を集中的に刺激する。',
            ],
            // ... 他の三角筋のトレーニング

            [
                'exercise_name' => 'ダンベルアーノルドプレス',
                'category_id' => 5,
                'description' => '座りながら行うダンベルのプレス。三角筋を包括的に鍛える。',
            ],
            [
                'exercise_name' => 'バーベルシュラッグ',
                'category_id' => 5,
                'description' => '立位でバーベルを垂直に引き上げ、肩を引き締めるトレーニング。上部三角筋を刺激する。',
            ],
            [
                'exercise_name' => 'ケーブルフェイスプル',
                'category_id' => 5,
                'description' => 'ケーブルマシンを使用して行う、三角筋後部を鍛えるトレーニング。',
            ],
            // ... 他の三角筋のトレーニング

            // その他の肩関連のトレーニング
            [
                'exercise_name' => 'バーベルアップライトロウ',
                'category_id' => 5,
                'description' => '立位でバーベルを体の前で引き上げるトレーニング。三角筋を中心に、上腕二頭筋や上腕三頭筋も刺激する。',
            ],
            [
                'exercise_name' => 'ケーブルサイドレイズ',
                'category_id' => 5,
                'description' => 'ケーブルマシンを使用して行う横方向へのレイズ。三角筋中部をターゲットにする。',
            ],
            [
                'exercise_name' => '通常のクランチ',
                'category_id' => 6,
                'description' => '仰向けで腹筋を収縮させるトレーニング。腹直筋を中心に鍛える。',
            ],
            [
                'exercise_name' => 'ハングレッグレイズ',
                'category_id' => 6,
                'description' => '吊りバーにぶら下がり、足を上げ下げするトレーニング。下腹部を特に刺激する。',
            ],
            [
                'exercise_name' => 'トウチ',
                'category_id' => 6,
                'description' => '仰向けで足先に手を伸ばすトレーニング。上腹部を中心に効果的な動作。',
            ],
            // ... 他の腹直筋のトレーニング

            // 外側腹斜筋 (External Obliques)
            [
                'exercise_name' => 'サイドクランチ',
                'category_id' => 6,
                'description' => '仰向けで行う横方向へのクランチ。外側腹斜筋を強化する。',
            ],
            [
                'exercise_name' => 'サイドプランク',
                'category_id' => 6,
                'description' => '横向きに寝て、肩を支点にしたプランクのバリエーション。外側腹斜筋を安定させる。',
            ],
            // ... 他の外側腹斜筋のトレーニング

            // 内側腹斜筋 (Internal Obliques)
            [
                'exercise_name' => 'バイシクルクランチ',
                'category_id' => 6,
                'description' => '自転車のこぎり運動を模したクランチ。内側腹斜筋を効果的に刺激する。',
            ],
            // ... 他の内側腹斜筋のトレーニング

            // 腹横筋 (Transversus Abdominis)
            [
                'exercise_name' => '通常のプランク',
                'category_id' => 6,
                'description' => '前腕または手のひらを地面につけて体を支えるトレーニング。腹横筋を強化し、コアを安定させる。',
            ],
            [
                'exercise_name' => 'デッドバグ',
                'category_id' => 6,
                'description' => '腕と脚を逆側に伸ばす動作を行うトレーニング。腹横筋と深層のコアを鍛える。',
            ],
            [
                'exercise_name' => 'クロスボディマウンテンクライマー',
                'category_id' => 6,
                'description' => 'プランクの状態から、膝を対角線に引き寄せる動作。腹横筋を強化する。',
            ],
            [
                'exercise_name' => 'バーベルヒップスラスト',
                'category_id' => 7,
                'description' => 'バーベルを骨盤に載せ、上下にヒップを押し上げるトレーニング。大臀筋を強化する。',
            ],
            [
                'exercise_name' => 'デッドリフト',
                'category_id' => 7,
                'description' => 'ヒップエクステンションを伴うデッドリフトのバリエーション。大臀筋を効果的に刺激する。',
            ],
            [
                'exercise_name' => 'ランジ',
                'category_id' => 7,
                'description' => 'ヒップを使ったランジのバリエーション。大臀筋の強化と下半身全体のトレーニング。',
            ],
            // ... 他の大臀筋のトレーニング

            // 中臀筋 (Gluteus Medius)
            [
                'exercise_name' => 'サイドランジ',
                'category_id' => 7,
                'description' => '横に大きく足を開いて行うランジ。中臀筋を強化する。',
            ],
            [
                'exercise_name' => 'サイドステップ',
                'category_id' => 7,
                'description' => 'ゴムバンドを使い、横に歩くような動作を行う。中臀筋のアイソレーションを図る。',
            ],
            // ... 他の中臀筋のトレーニング

            // 小臀筋 (Gluteus Minimus)
            [
                'exercise_name' => 'バンドクラムシェル',
                'category_id' => 7,
                'description' => 'ゴムバンドを使って行う、膝を開閉する動作。小臀筋を刺激する。',
            ],
            [
                'exercise_name' => 'バンドウォーク',
                'category_id' => 7,
                'description' => 'ゴムバンドを膝に巻き、サイドステップを行う。小臀筋の強化に効果的。',
            ],
            // ... 他の小臀筋のトレーニング

            // その他の臀部関連のトレーニング
            [
                'exercise_name' => 'バックキック',
                'category_id' => 7,
                'description' => 'マシンを使用して後ろに足を蹴り上げるトレーニング。臀部全体を刺激する。',
            ],
            [
                'exercise_name' => 'ステップアップ',
                'category_id' => 7,
                'description' => 'バーベルを持ちながら高い台に交互に足を乗せる動作。臀部全体に効果的。',
            ],
            [
                'exercise_name' => 'バーベルデッドリフト',
                'category_id' => 8,
                'description' => 'バーベルを前に倒れないように背中をまっすぐ保ちながら持ち上げるトレーニング。脊柱起立筋全体に効果的。',
            ],
            [
                'exercise_name' => 'スタンスデッドリフト',
                'category_id' => 8,
                'description' => '足の幅を広げて行うデッドリフトのバリエーション。広範囲な脊柱起立筋の刺激が期待できる。',
            ],
            [
                'exercise_name' => 'グッドモーニング',
                'category_id' => 8,
                'description' => 'バーベルを肩に載せ、前傾しながら背中をまっすぐ保つトレーニング。脊柱起立筋の伸展を強化する。',
            ],
            [
                'exercise_name' => 'ハイパーエクステンション',
                'category_id' => 8,
                'description' => 'ハイパーエクステンションマシンを使用して背中を伸ばすトレーニング。脊柱起立筋を強調的に刺激する。',
            ],
            [
                'exercise_name' => 'ローマンチェアバックエクステンション',
                'category_id' => 8,
                'description' => 'ローマンチェアを使用して行う背面のエクステンション。脊柱起立筋を集中的に鍛える。',
            ],
            [
                'exercise_name' => 'リバースハイパーエクステンション',
                'category_id' => 8,
                'description' => 'ハイパーエクステンションマシンを逆さにして行うトレーニング。脊柱起立筋の反対側を刺激する。',
            ],
            [
                'exercise_name' => 'ツイスティングデッドリフト',
                'category_id' => 8,
                'description' => 'バーベルデッドリフト中に体をねじるような動きを加えるトレーニング。脊柱起立筋にねじりの刺激を与える。',
            ],
        ];

        foreach ($exercises_master as $master_data) {
            ExercisesMaster::create($master_data);
        }
    }
}
