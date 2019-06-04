<?php

use Illuminate\Database\Seeder;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phrases = [
    		[
    			"japaneseSentence" => "会社を代表して、本日皆様を歓迎したいと思います。",
    			"englishSentence" => "On behalf of Company I would like to welcome you here today.",
    			"pattern_id" => 1
    		],
    		[
                "japaneseSentence" => "皆さんこんにちは。",
                "englishSentence" => "Good afternoon ladies and gentlemen.",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "「イベントの名前」にようこそ",
                "englishSentence" => "Welcome to [name of event].",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "それでは始めましょう。",
                "englishSentence" => "Right, let’s make a start.",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "本日は、(私のプレゼンに)お越し下さり、ありがとうございます。",
                "englishSentence" => "Thank you very much for coming (to my presentation) today.",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "お忙しいところ、お時間を頂き、有難うございます。",
                "englishSentence" => "I would like to thank you for your time today.",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "お越しいただきありがとうございます。",
                "englishSentence" => "Thank you all for coming today",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "この機会が与えられましたことは最高の喜びです。",
                "englishSentence" => "It is a great honor to be given this opportunity to present here.",
                "pattern_id" => 1
            ],
            [
                "japaneseSentence" => "それでは始めましょう",
                "englishSentence" => "Now let's begin.",
                "pattern_id" => 1
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "こんにちは。私は会社名の部署の役職名です 名前は...です。",
                "englishSentence" => "Hello, I’m ... and I am [post] of [department] of [Company X].",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "皆さんこんにちは。「会社名」からきました...です。今日は...について話します。",
                "englishSentence" => "Hello everyone, I’m ... from ... and today I’d like to talk to you about…",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "少し私の自己紹介をさせてください。私の名前は...です。...について今日お話しすることができて嬉しいです。",
                "englishSentence" => "Let me briefly introduce myself. My name is ... and I am delighted to be here today to talk to you about…",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "まず自己紹介をさせてください。私の名前は...です。私は「会社名」の 「ポジション」です。",
                "englishSentence" => "First, let me introduce myself. My name is ... and I am the “Position” of “Company X”.",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "「会社名」からきました...です。今日は...について話します。",
                "englishSentence" => "I’m ... from “Company Y” and today I’d like to talk to you about…",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "まず初めに自己紹介をさせてください。",
                "englishSentence" => "First, let me introduce myself.",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "初めてお会いする方もいらっしゃるかと存じますが、私は***と申します。",
                "englishSentence" => "For those of you who don't know me, My name is ***...",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "私はこれまで○○の分野に携わってきました。",
                "englishSentence" => "My background is in the field of...",
                "pattern_id" => 2
            ],
            [
                "japaneseSentence" => "***として○年間勤めております。",
                "englishSentence" => "I have been working as a ... for ... years",
                "pattern_id" => 2
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "メンバー紹介をします。",
                "englishSentence" => "I’d like to introduce my team member.",
                "pattern_id" => 3
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "まずいくつかの背景から紹介させてください",
                "englishSentence" => "Let me start by giving you some background information.",
                "pattern_id" => 4
            ],
            [
                "japaneseSentence" => "もしかしたら以前に聞いたことがあるかもしれません。",
                "englishSentence" => "You’ve probably heard some of this before…",
                "pattern_id" => 4
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "今日は..について話します",
                "englishSentence" => "Today I am here to talk to you about…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "As you all know, today I am going to talk to you about…",
                "englishSentence" => "皆さんも知っての通り、..について話します",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "この場を借りて...について話したいと思います",
                "englishSentence" => "I would like to take this opportunity to talk to you about…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "I am delighted to be here today to tell you about…",
                "englishSentence" => "...について今日お話しすることができて嬉しいです",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "今日は...についてお話ししたいと思います",
                "englishSentence" => "Today I would like to outline…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "今日私が話す内容は...です。",
                "englishSentence" => "What I am going to talk about today is…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "今日は...についての短いプレゼンテーションをします。",
                "englishSentence" => "I want to make you a short presentation about…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "このプレゼンテーションの目的は...です",
                "englishSentence" => "The purpose of this presentation is…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "今日の私の目的は...です",
                "englishSentence" => "My objective today is…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "...について少し話すつもりです。",
                "englishSentence" => "I plan to say a few words about…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "今日の目的は...です。",
                "englishSentence" => "The subject of my talk is…",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "本日のプレゼンの目的は、皆様に弊社の新しいプロジェクトについてお伝えすることです。",
                "englishSentence" => "The purpose of my presentation today is to talk about our new project.",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "私のプレゼンテーションの主題は、弊社の新しいプロジェクトです。",
                "englishSentence" => "The subject of my presentation is our new project.",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "本日のメイントピックは、弊社の新しいプロジェクトです。",
                "englishSentence" => "Today's main topic is our new project.",
                "pattern_id" => 5
            ],
            [
                "japaneseSentence" => "まずは本日のプレゼンテーションの概要を説明いたします",
                "englishSentence" => "I'd briefly like to take you through today's presentation.",
                "pattern_id" => 5
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "今日の話しはxのパートに分かれています。",
                "englishSentence" => "My talk is divided into x parts.",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "まず..から始めたいと思います。",
                "englishSentence" => "I’ll start with ..",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "まずはじめに..について話したいと思います",
                "englishSentence" => "Firstly I will talk about…",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "まず..から始めたいと思います",
                "englishSentence" => "I’ll begin with..",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "私の話は３つのパートに分かれています。",
                "englishSentence" => "My talk will be in three parts.",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "最初は...についてで、それから２つ目は...についてで、最後に...について話します。",
                "englishSentence" => "In the first part… Then in the second part… Finally, I’ll go on to talk about…",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "私のプレゼンは3つのパートに分かれています。",
                "englishSentence" => "My presentation is divided into three parts",
                "pattern_id" => 6
            ],
            [
                "japaneseSentence" => "4つの主なパートがあります",
                "englishSentence" => "I have four main points…",
                "pattern_id" => 6
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "プレゼンテーションは、９０分程度を予定いたしております。",
                "englishSentence" => "My presentation will take about 90 minutes.",
                "pattern_id" => 7
            ],
            [
                "japaneseSentence" => "１時間ほどお話をさせていただく予定です。",
                "englishSentence" => "I plan to speak for about an hour.",
                "pattern_id" => 7
            ],
            [
                "japaneseSentence" => "10分以上お時間を頂くことはないと思います。",
                "englishSentence" => "I won’t take up more than ten minutes of your time.",
                "pattern_id" => 7
            ],
            [
                "japaneseSentence" => "10分以上にはならない予定です。",
                "englishSentence" => "I don’t intend to speak for longer than ten minutes.",
                "pattern_id" => 7
            ],
            [
                "japaneseSentence" => "10分の間にたくさん詰め込まなければならないため、早速始めましょう。",
                "englishSentence" => "I have a lot to cram into the next ten minutes, so I’d better make a start.",
                "pattern_id" => 7
            ],
            [
                "japaneseSentence" => "短めにお話しします。",
                "englishSentence" => "I’ll try to keep it short.",
                "pattern_id" => 7
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "質問は最後によこんで答えます。",
                "englishSentence" => "I will be glad to answer any questions that you may have at the end.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "質問がある場合はプレゼン中でも構いません",
                "englishSentence" => "Please interrupt if you have any questions.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "プレゼン後に質問タイムがあります。",
                "englishSentence" => "After my talk, there will be time for any questions.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "プレゼンの最中であっても、もしご質問のある方は、どうぞその場その時に御質問ください。",
                "englishSentence" => "Please feel free to interrupt me with any questions you may have during the presentation.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "いつでもご質問をお願いします。",
                "englishSentence" => "Feel free to ask any questions at any time.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "もしご質問のある方は、プレゼンテーション終了までお待ち下さい。",
                "englishSentence" => "I'd like to ask you to keep any questions you may have for the end of the presentation.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "最後にまとめてご質問を受け付けます。",
                "englishSentence" => "Please hold all questions till the end.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "プレゼン後までご質問をお待ち頂けるとありがたいです。",
                "englishSentence" => "I’d be grateful if you could wait to ask your questions until after the presentation.",
                "pattern_id" => 8
            ],
            [
                "japaneseSentence" => "ご質問があればご遠慮なくどうぞ。",
                "englishSentence" => "Don’t hesitate to interrupt if you have a question.",
                "pattern_id" => 8
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "配布資料を参照してください。",
                "englishSentence" => "Please refer to the handouts.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "このグラフは.............を表しています。",
                "englishSentence" => "This chart indicates........................",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "Please pay attention to this line graph. This shows the change of the number of respondents to the questionnaire.",
                "englishSentence" => "この折れ線グラフを見てください。アンケートの回答者の推移をあわしています。",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "このグラフのこの部分をご注目ください。",
                "englishSentence" => "Let me draw your attention to this part of the graph.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "こちらのグラフでご紹介したいと思います。",
                "englishSentence" => "I’d like to present you with this graph.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "この表（グラフ）を見てください",
                "englishSentence" => "Please look at this pie chart（graph）.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "それでは、次の円グラフへ移りましょう",
                "englishSentence" => "Now let's go on to the next chart.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "グラフの縦軸はAAAの金額を表し、横軸は数量を表しています。",
                "englishSentence" => "The vertical line shows the price of AAA and the horizontal line shows the amount of AAA.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "この月の値をよくご覧ください。",
                "englishSentence" => "Let’s look more closely at this month’s figures.",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "私たちの調査に基づくと、...です。",
                "englishSentence" => "Based on our findings,…",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "Let me use a graphic to explain this.",
                "englishSentence" => "これを説明するためにグラフを使います。",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "...を見せながらこの要点について説明しようと思います。",
                "englishSentence" => "I’d like to illustrate this point by showing you…",
                "pattern_id" => 9
            ],
            [
                "japaneseSentence" => "このグラフは...の詳細です。",
                "englishSentence" => "This chart shows a breakdown of …",
                "pattern_id" => 9
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "次の具体例を見てみましょう",
                "englishSentence" => "Let's take a look at the following concrete example.",
                "pattern_id" => 10
            ],
            [
                "japaneseSentence" => "私の意見を裏付ける例です",
                "englishSentence" => "This case supports my opinion.",
                "pattern_id" => 10
            ],
            [
                "japaneseSentence" => "このような事例は多く見受けられます",
                "englishSentence" => "We can see cases like this quite a few times.",
                "pattern_id" => 10
            ],
            [
                "japaneseSentence" => "Over the past few years it has decreased very rapidly.",
                "englishSentence" => "過去数年間で、急速に減少しています。",
                "pattern_id" => 10
            ],
            [
                "japaneseSentence" => "1971年～1998年にかけて、徐々に減少してきました。",
                "englishSentence" => "It has been declining gradually from 1971 to 1998.",
                "pattern_id" => 10
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "別の視点から考えてみましょう。",
                "englishSentence" => "Let's look at this again from a different angle.",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次の具体的な例を見てみましょう。",
                "englishSentence" => "Let's take a look at the following concrete example.",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次のトピックに移りましょう。",
                "englishSentence" => "Now, I'd like to move on to the next topic.",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "もしご質問がなければ...............に移ります。",
                "englishSentence" => "If there are no more questions, I’ll move on to.................",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "みなさんお分かり頂けたのであれば、次に移ります。",
                "englishSentence" => "If everyone is clear on that point ,I'll move onto the next.",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次の要点に移りましょう。",
                "englishSentence" => "Right, let’s move on to my next point.",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "...についてみていこうと思います",
                "englishSentence" => "I’d now like to look at ...",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次に移る前に質問がある人はいますか？",
                "englishSentence" => "Does anyone have any questions before I move on?",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次の要点に移ります。それは...です",
                "englishSentence" => "I’ll now move on to my next point which is…",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次の要点に移ります。それは...です",
                "englishSentence" => "So now we come to the next point, which is…",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "これから...について話そうと思います。",
                "englishSentence" => "Now I want to describe…",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "次の問題に移りましょう。",
                "englishSentence" => "Let’s tur1n to the next issue.",
                "pattern_id" => 11
            ],
            [
                "japaneseSentence" => "これから話の方向を変えて...について話したいと思います。",
                "englishSentence" => "I’d now like to change direction and talk about...",
                "pattern_id" => 11
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "皆さんもおそらくどういう意味かわからないと思います。",
                "englishSentence" => "You’re probably asking yourselves what this all means.",
                "pattern_id" => 12
            ],
            [
                "japaneseSentence" => "まずはじめに",
                "englishSentence" => "So, first…",
                "pattern_id" => 12
            ],
            [
                "japaneseSentence" => "まずはじめに",
                "englishSentence" => "To begin with…",
                "pattern_id" => 12
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "...について詳しく述べたいと思います。",
                "englishSentence" => "I’d like to expand on…",
                "pattern_id" => 13
            ],
            [
                "japaneseSentence" => "さらに詳しく説明します。",
                "englishSentence" => "Let me elaborate further.",
                "pattern_id" => 13
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "初めに話したように、...です。",
                "englishSentence" => "As I said at the beginning, …",
                "pattern_id" => 14
            ],
            [
                "japaneseSentence" => "先ほど話したことに関連して...です。",
                "englishSentence" => "This relates to what I was saying earlier…",
                "pattern_id" => 14
            ],
            [
                "japaneseSentence" => "これは...と関係しています。",
                "englishSentence" => "This ties in with…",
                "pattern_id" => 14
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "重要な部分は...です。",
                "englishSentence" => "The significance of this is…",
                "pattern_id" => 15
            ],
            [
                "japaneseSentence" => "これは重要です。なぜなら...からです。",
                "englishSentence" => "This is important because…",
                "pattern_id" => 15
            ],
            [
                "japaneseSentence" => "私たちは...ということを思い出さなければならない。",
                "englishSentence" => "We have to remember that …",
                "pattern_id" => 15
            ],
            [
                "japaneseSentence" => "...を強調しておきます。",
                "englishSentence" => "It should be emphasized that…",
                "pattern_id" => 15
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "他の言い方をすると、",
                "englishSentence" => "To put it in another way….",
                "pattern_id" => 16
            ],
            [
                "japaneseSentence" => "つまり何が言いたいかというと、",
                "englishSentence" => "So, what I’m saying is….",
                "pattern_id" => 16
            ],
            [
                "japaneseSentence" => "私が言いたいことは、",
                "englishSentence" => "What I mean to say is…",
                "pattern_id" => 16
            ],
            [
                "japaneseSentence" => "もっと簡単にいうと、",
                "englishSentence" => "To put it more simply,…",
                "pattern_id" => 16
            ],
            [
                "japaneseSentence" => "言い換えると、",
                "englishSentence" => "In other words,…",
                "pattern_id" => 16
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "今ままでのところで何か質問はありますか？",
                "englishSentence" => "Do you have any questions, so far?",
                "pattern_id" => 17
            ],
            [
                "japaneseSentence" => "この時点で質問はありますか？",
                "englishSentence" => "Are there any questions at this stage?",
                "pattern_id" => 17
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "Bと比べて、Aは〜を表しています",
                "englishSentence" => "In contrast to B , A shows 〜",
                "pattern_id" => 18
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => ".....について申し上げたいことは、以上になります。",
                "englishSentence" => "That’s all I have to say about........",
                "pattern_id" => 19
            ],
            [
                "japaneseSentence" => "....ここまで〜についてお話ししました。",
                "englishSentence" => "So, that concludes my talk on.....",
                "pattern_id" => 19
            ],
            [
                "japaneseSentence" => "Aからすると当然、Bは避けられないのです。",
                "englishSentence" => "One point that follows from A is that we cannot avoid B.",
                "pattern_id" => 19
            ],
            [
                "japaneseSentence" => "Ａが起こった以上、Ｂは不可避です。",
                "englishSentence" => "As a consequence of A occurring, B is inevitable.",
                "pattern_id" => 19
            ],
            [
                "japaneseSentence" => "Aの結果から、Bが起こることが予見されます",
                "englishSentence" => "From A, it follows that we are going to have to expect B.",
                "pattern_id" => 19
            ],
            [
                "japaneseSentence" => "Aの結果から、Bが起こることが予見されます",
                "englishSentence" => "We must anticipate that B will be following on from A.",
                "pattern_id" => 19
            ],
            [
                "japaneseSentence" => "最後にお伝えしたいことは、～。",
                "englishSentence" => "The last thing I’d like to say is ～.",
                "pattern_id" => 19
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "要点をまとめると",
                "englishSentence" => "So to recap…",
                "pattern_id" => 20
            ],
            [
                "japaneseSentence" => "これまで話してきた内容をまとめたいと思います。",
                "englishSentence" => "Let me summarize the point of our presentation.",
                "pattern_id" => 20
            ],
            [
                "japaneseSentence" => "これまで話してきた最初のトピックをまとめたいと思います。",
                "englishSentence" => "Let me summarize the first topic of our presentation.",
                "pattern_id" => 20
            ],
            [
                "japaneseSentence" => "これまで話してきた最後のトピックをまとめたいと思います。",
                "englishSentence" => "Let me summarize the last topic of our presentation.",
                "pattern_id" => 20
            ],
            [
                "japaneseSentence" => "これまで話してきた内容をまとめ、提言をお話したいと思います。",
                "englishSentence" => "Let me summarize the point of my presentation and make a suggestion.",
                "pattern_id" => 20
            ],
            [
                "japaneseSentence" => "本日の要点をお伝えすると・・・",
                "englishSentence" => "I’m now going to give a brief summary of what we have covered…",
                "pattern_id" => 20
            ],
            [
                "japaneseSentence" => "要約させていただくと、…",
                "englishSentence" => "If I can briefly summarize, …",
                "pattern_id" => 20
            ]21
            [
                "japaneseSentence" => "最後に、主要なポイントをもう一度指摘させてください。",
                "englishSentence" => "Before I stop, let me go through my main points again.",
                "pattern_id" => 20
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "最後にカギとなるポイントを再度お話しして終わりたいと思います。",
                "englishSentence" => "I’d like to finish by restating the key issue.",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "結論として、… を言うことを指摘したいと思います",
                "englishSentence" => "To conclude, I’d (I would) like to say that …",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "次のポイントを指摘することで結論としたいと思います。",
                "englishSentence" => "I’d (I would) like to conclude by making following points.",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "これらの調査結果から導き出される結論は何でしょうか？",
                "englishSentence" => "What can we conclude from this those findings?",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "次のポイントを指摘することで結論としたいと思います。",
                "englishSentence" => "I’d (I would) like to conclude by making following points.",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "結論として、私が言いたいことは〇〇です。",
                "englishSentence" => "In conclusion, I would like to say is 〇〇.",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "結論として、主な要点を要約します。",
                "englishSentence" => "In conclusion, let me sum up my main points.",
                "pattern_id" => 21
            ],
            [
                "japaneseSentence" => "長所と短所を比べて、...という結論に達します。",
                "englishSentence" => "Weighing the pros and cons, I come to the conclusion that…",
                "pattern_id" => 21
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "ご静聴ありがとうございます。今日この場に立てて嬉しかったです。",
                "englishSentence" => "Thank you all for listening. It was a pleasure being here today.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "以上で私のプレゼンテーションとさせていただきます。ありがとうございます。",
                "englishSentence" => "Well, that’s it from me. Thanks very much.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "ご清聴ありがとうございました。",
                "englishSentence" => "Thank you (all) for listening [your attention].",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "ご清聴ありがとうございました。",
                "englishSentence" => "Thank you (all) for being such a good [an attentive] audience.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "お時間をいただきありがとうございました。",
                "englishSentence" => "Thank you for your time.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "ご清聴に感謝しつつ、話を終えさせていただきます。",
                "englishSentence" => "I'd like to finish [end] by thanking you (all) for listening [your attention].",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "これでプレゼン[私の話]を終わります。",
                "englishSentence" => "That brings us to the end of my presentation.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "これでプレゼン[私の話]を終わります。",
                "englishSentence" => "That's all for my presentation.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "これでプレゼン[私の話]を終わります。",
                "englishSentence" => "That concludes my presentation.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "本日のプレゼンテーションの最後になります。",
                "englishSentence" => "We are coming to the end of today’s presentation.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "本日はプレゼンテーションにご参加していただきありがとうございます。",
                "englishSentence" => "Thank you once again for taking the time to join today’s presentation.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "本日は時間を割いていただきありがとうございました。",
                "englishSentence" => "Thanks so much for taking the time to join today.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "これで最後の部分が終わりました。",
                "englishSentence" => "That brings us to the end of the final part.",
                "pattern_id" => 22
            ],
            [
                "japaneseSentence" => "本日のプレゼンテーションの最後になります。",
                "englishSentence" => "We are coming to the end of today’s presentation.",
                "pattern_id" => 22
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "もう一度繰り返していただけますか。",
                "englishSentence" => "Could you say that again?",
                "pattern_id" => 23
            ],
            [
                "japaneseSentence" => "ご質問の内容をよく理解できません。",
                "englishSentence" => "I don’t quite understand your question.",
                "pattern_id" => 23
            ],
            [
                "japaneseSentence" => "ご質問がありましたらご遠慮なくどうぞ。",
                "englishSentence" => "If you have any questions, I’d be happy to answer them.",
                "pattern_id" => 23
            ],
            [
                "japaneseSentence" => "もしご質問がありましたら、喜んで回答させていただきます。",
                "englishSentence" => "If you have any questions, I’d be happy to answer them now.",
                "pattern_id" => 23
            ],
            [
                "japaneseSentence" => "どなたかご質問はございますか。",
                "englishSentence" => "Does anyone have any questions?",
                "pattern_id" => 23
            ],
            [
                "japaneseSentence" => "今の話について疑問や質問はありますか？",
                "englishSentence" => "Any comments or questions on the points I talked about?",
                "pattern_id" => 23
            ],
            [
                "japaneseSentence" => "質問が聞き取れませんでした。",
                "englishSentence" => "I didn’t catch your question.",
                "pattern_id" => 23
            ]

    	];

    	foreach ($phrases as $phrase) {
    		DB::table("phrases")->insert([
    			"japaneseSentence" => $phrase["japaneseSentence"],
                "englishSentence" => $phrase["englishSentence"],
                "pattern_id" => $phrase["pattern_id"],
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
