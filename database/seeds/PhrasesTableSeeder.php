<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Situation;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $situations = Situation::all();
        $phrases = [
    		[
                "japaneseSentence" => "皆さんこんにちは。",
                "englishSentence" => "Good afternoon ladies and gentlemen. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "「イベントの名前」にようこそ。",
                "englishSentence" => "Welcome to [name of event]. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "会社を代表して、本日皆様を歓迎したいと思います。",
                "englishSentence" => "On behalf of [Company], I would like to welcome you here today. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "本日は、私のプレゼンにお越し下さり、ありがとうございます。",
                "englishSentence" => "Thank you very much for coming to my presentation today. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "お忙しいところ、お時間を頂き、有難うございます。",
                "englishSentence" => "I would like to thank you for your time today. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "お越しいただきありがとうございます。",
                "englishSentence" => "Thank you all for coming today. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "この機会が与えられましたことは最高の喜びです。",
                "englishSentence" => "It is a great honor to be given this opportunity to present here. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "それでは始めましょう。",
                "englishSentence" => "Right, let’s make a start. ",
                "situation_id" => $situations[0]->id
            ],
            [
                "japaneseSentence" => "それでは始めましょう。",
                "englishSentence" => "Now let's begin. ",
                "situation_id" => $situations[0]->id
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "まず初めに自己紹介をさせてください。",
                "englishSentence" => "First, let me introduce myself. ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "まず自己紹介をさせてください。私の名前は「名前」です。私は「会社名」の 「ポジション」です。",
                "englishSentence" => "First, let me introduce myself. My name is [name] and I am the [position] of [company]. ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "少し私の自己紹介をさせてください。私の名前は「名前」です。「主題」について今日お話しすることができて嬉しいです。",
                "englishSentence" => "Let me briefly introduce myself. My name is [name] and I am delighted to be here today to talk to you about [theme]. ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "初めてお会いする方もいらっしゃるかと存じますが、私は「名前」と申します。",
                "englishSentence" => "For those of you who don't know me, my name is [name] ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "こんにちは。私は「会社名」の「部署」の「役職名」です 名前は「名前」です。",
                "englishSentence" => "Hello, I’m [name] and I am [post] of [department] of [company]. ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "皆さんこんにちは。「会社名」からきました「名前」です。今日は「主題」について話します。",
                "englishSentence" => "Hello everyone, I’m [name] from [company] and today I’d like to talk to you about [theme] ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "「会社名」からきました「名前」です。今日は「主題」について話します。",
                "englishSentence" => "I’m [name] from [company] and today I’d like to talk to you about [theme] ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "私はこれまで「種類」の分野に携わってきました。",
                "englishSentence" => "My background is in the field of [category] ",
                "situation_id" => $situations[1]->id
            ],
            [
                "japaneseSentence" => "「役職名」として○年間勤めております。",
                "englishSentence" => "I have been working as a [post] for ○ years. ",
                "situation_id" => $situations[1]->id
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "メンバー紹介をします。",
                "englishSentence" => "I’d like to introduce my team member. ",
                "situation_id" => $situations[2]->id
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "まずいくつかの背景から紹介させてください。",
                "englishSentence" => "Let me start by giving you some background information. ",
                "situation_id" => $situations[3]->id
            ],
            [
                "japaneseSentence" => "もしかしたら以前に聞いたことがあるかもしれません。",
                "englishSentence" => "You’ve probably heard some of this before. ",
                "situation_id" => $situations[3]->id
            ],
            // ---------------------------------------------------
            [
                "japaneseSentence" => "まずは本日のプレゼンテーションの概要を説明いたします。",
                "englishSentence" => "I'd briefly like to take you through today's presentation. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "今日は「主題」について話します。",
                "englishSentence" => "Today I am here to talk to you about [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "皆さんも知っての通り、「主題」について話します",
                "englishSentence" => "As you all know, today I am going to talk to you about [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "この場を借りて「主題」について話したいと思います。",
                "englishSentence" => "I would like to take this opportunity to talk to you about [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "「主題」について今日お話しすることができて嬉しいです",
                "englishSentence" => "I am delighted to be here today to tell you about [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "今日は「主題」についてお話ししたいと思います。",
                "englishSentence" => "Today I would like to outline [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "今日私が話す内容は「主題」です。",
                "englishSentence" => "What I am going to talk about today is [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "今日は「主題」についての短いプレゼンテーションをします。",
                "englishSentence" => "I want to make you a short presentation about [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "「主題」について少し話すつもりです。",
                "englishSentence" => "I plan to say a few words about [theme]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "私のプレゼンテーションの主題は、弊社の新しいプロジェクトです。",
                "englishSentence" => "The subject of my presentation is our new project. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "本日のメイントピックは、弊社の新しいプロジェクトです。",
                "englishSentence" => "Today's main topic is our new project. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "このプレゼンテーションの目的は「目的」です。",
                "englishSentence" => "The purpose of this presentation is [purpose]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "今日の私の目的は「目的」です。",
                "englishSentence" => "My objective today is [purpose]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "今日の目的は「目的」です。",
                "englishSentence" => "The subject of my talk is [purpose]. ",
                "situation_id" => $situations[4]->id
            ],
            [
                "japaneseSentence" => "本日のプレゼンの目的は、皆様に弊社の新しいプロジェクトについてお伝えすることです。",
                "englishSentence" => "The purpose of my presentation today is to talk about our new project. ",
                "situation_id" => $situations[4]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "今日の話しは○つのパートに分かれています。",
                "englishSentence" => "My talk is divided into ○ parts. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "私の話は３つのパートに分かれています。",
                "englishSentence" => "My talk will be in three parts. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "私のプレゼンは3つのパートに分かれています。",
                "englishSentence" => "My presentation is divided into three parts. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "4つの主なパートがあります。",
                "englishSentence" => "I have four main points. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "まず「内容」から始めたいと思います。",
                "englishSentence" => "I’ll start with [content]. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "まずはじめに「内容」について話したいと思います。",
                "englishSentence" => "Firstly I will talk about [content]. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "まず「内容」から始めたいと思います。",
                "englishSentence" => "I’ll begin with [content]. ",
                "situation_id" => $situations[5]->id
            ],
            [
                "japaneseSentence" => "最初は「内容」についてで、それから２つ目は「内容」についてで、最後に「内容」について話します。",
                "englishSentence" => "In the first part [content]. Then in the second part [content]. Finally, I’ll go on to talk about [content]. ",
                "situation_id" => $situations[5]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "プレゼンテーションは、９０分程度を予定いたしております。",
                "englishSentence" => "My presentation will take about 90 minutes. ",
                "situation_id" => $situations[6]->id
            ],
            [
                "japaneseSentence" => "１時間ほどお話をさせていただく予定です。",
                "englishSentence" => "I plan to speak for about an hour. ",
                "situation_id" => $situations[6]->id
            ],
            [
                "japaneseSentence" => "10分以上お時間を頂くことはないと思います。",
                "englishSentence" => "I won’t take up more than ten minutes of your time. ",
                "situation_id" => $situations[6]->id
            ],
            [
                "japaneseSentence" => "10分以上にはならない予定です。",
                "englishSentence" => "I don’t intend to speak for longer than ten minutes. ",
                "situation_id" => $situations[6]->id
            ],
            [
                "japaneseSentence" => "10分の間にたくさん詰め込まなければならないため、早速始めましょう。",
                "englishSentence" => "I have a lot to cram into the next ten minutes, so I’d better make a start. ",
                "situation_id" => $situations[6]->id
            ],
            [
                "japaneseSentence" => "短めにお話しします。",
                "englishSentence" => "I’ll try to keep it short. ",
                "situation_id" => $situations[6]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "プレゼンの最中であっても、もしご質問のある方は、どうぞその場その時に御質問ください。",
                "englishSentence" => "Please feel free to interrupt me with any questions you may have during the presentation. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "質問がある場合はプレゼン中でも構いません。",
                "englishSentence" => "Please interrupt if you have any questions. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "いつでも気軽にご質問をお願いします。",
                "englishSentence" => "Feel free to ask any questions at any time. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "ご質問があればご遠慮なくどうぞ。",
                "englishSentence" => "Don’t hesitate to interrupt if you have a question. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "質問は最後に喜んで答えます。",
                "englishSentence" => "I will be glad to answer any questions that you may have in the end. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "プレゼン後に質問タイムがあります。",
                "englishSentence" => "After my talk, there will be time for any questions. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "もしご質問のある方は、プレゼンテーション終了までお待ち下さい。",
                "englishSentence" => "I'd like to ask you to keep any questions you may have for the end of the presentation. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "最後にまとめてご質問を受け付けます。",
                "englishSentence" => "Please hold all questions until the end. ",
                "situation_id" => $situations[7]->id
            ],
            [
                "japaneseSentence" => "プレゼン後までご質問をお待ち頂けるとありがたいです。",
                "englishSentence" => "I’d be grateful if you could wait to ask your questions until after the presentation. ",
                "situation_id" => $situations[7]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "配布資料を参照してください。",
                "englishSentence" => "Please refer to the handouts. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "この表を見てください。",
                "englishSentence" => "Please look at this pie chart. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "これを説明するためにグラフを使います。",
                "englishSentence" => "Let me use a graphic to explain this. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "こちらのグラフでご紹介したいと思います。",
                "englishSentence" => "I’d like to present you with this graph. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "グラフを見せながらこの要点について説明しようと思います。",
                "englishSentence" => "I’d like to illustrate this point by showing you a chart",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "このグラフは「内容」を表しています。",
                "englishSentence" => "This chart indicates [content]. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "このグラフは「AAA」の詳細です。",
                "englishSentence" => "This chart shows a breakdown of [AAA]. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "この折れ線グラフを見てください。アンケートの回答者の推移をあわしています。",
                "englishSentence" => "Please pay attention to this line graph. This shows the change of the number of respondents to the questionnaire. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "このグラフのこの部分をご注目ください。",
                "englishSentence" => "Let me draw your attention to this part of the graph. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "それでは、次の円グラフへ移りましょう。",
                "englishSentence" => "Now let's go on to the next chart. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "グラフの縦軸は「AAA」の金額を表し、横軸は数量を表しています。",
                "englishSentence" => "The vertical line shows the price of AAA and the horizontal line shows the amount of [AAA]. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "この月の値をよくご覧ください。",
                "englishSentence" => "Let’s look more closely at this month’s figures. ",
                "situation_id" => $situations[8]->id
            ],
            [
                "japaneseSentence" => "私たちの調査に基づくと、「結果」です。",
                "englishSentence" => "Based on our findings, [result]. ",
                "situation_id" => $situations[8]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "次の具体例を見てみましょう。",
                "englishSentence" => "Let's take a look at the following concrete example. ",
                "situation_id" => $situations[9]->id
            ],
            [
                "japaneseSentence" => "私の意見を裏付ける例です。",
                "englishSentence" => "This case supports my opinion. ",
                "situation_id" => $situations[9]->id
            ],
            [
                "japaneseSentence" => "このような事例は多く見受けられます。",
                "englishSentence" => "We can see cases like this quite a few times. ",
                "situation_id" => $situations[9]->id
            ],
            [
                "japaneseSentence" => "過去数年間で、急速に減少しています。",
                "englishSentence" => "Over the past few years, it has decreased very rapidly. ",
                "situation_id" => $situations[9]->id
            ],
            [
                "japaneseSentence" => "1971年～1998年にかけて、徐々に減少してきました。",
                "englishSentence" => "It has been declining gradually from 1971 to 1998. ",
                "situation_id" => $situations[9]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "次に移る前に質問がある人はいますか？",
                "englishSentence" => "Does anyone have any questions before I move on? ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "もしご質問がなければ次の「トピック」に移ります。",
                "englishSentence" => "If there are no more questions, I’ll move on to next [topic]. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "別の視点から考えてみましょう。",
                "englishSentence" => "Let's look at this again from a different angle. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次の要点に移りましょう。",
                "englishSentence" => "Right, let’s move on to my next point. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次の問題に移りましょう。",
                "englishSentence" => "Let’s tur1n to the next issue. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次のトピックに移りましょう。",
                "englishSentence" => "Now, I'd like to move on to the next topic. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次の「トピック」についてみていこうと思います。",
                "englishSentence" => "I’d now like to look at the next [topic]. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次の具体的な例を見てみましょう。",
                "englishSentence" => "Let's take a look at the following concrete example. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "これから「トピック」について話そうと思います。",
                "englishSentence" => "Now I want to describe [topic]. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "みなさんお分かり頂けたのであれば、次に移ります。",
                "englishSentence" => "If everyone is clear on that point, I'll move onto the next. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次の要点に移ります。それは「トピック」です。",
                "englishSentence" => "I’ll now move on to my next point which is [topic]. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "次の要点に移ります。それは「要点」です。",
                "englishSentence" => "So now we come to the next point, which is [point]. ",
                "situation_id" => $situations[10]->id
            ],
            [
                "japaneseSentence" => "これから話の方向を変えて「トピック」について話したいと思います。",
                "englishSentence" => "I’d now like to change direction and talk about [topic]. ",
                "situation_id" => $situations[10]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "まずはじめに",
                "englishSentence" => "So, first ",
                "situation_id" => $situations[11]->id
            ],
            [
                "japaneseSentence" => "まずはじめに",
                "englishSentence" => "To begin with ",
                "situation_id" => $situations[11]->id
            ],
            [
                "japaneseSentence" => "皆さんもおそらくどういう意味かわからないと思います。",
                "englishSentence" => "You’re probably asking yourselves what this all means. ",
                "situation_id" => $situations[11]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "「トピック」について詳しく述べたいと思います。",
                "englishSentence" => "I’d like to expand on [topic]. ",
                "situation_id" => $situations[12]->id
            ],
            [
                "japaneseSentence" => "さらに詳しく説明します。",
                "englishSentence" => "Let me elaborate further. ",
                "situation_id" => $situations[12]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "初めに話したように、「AAA」です。",
                "englishSentence" => "As I said at the beginning, [AAA]. ",
                "situation_id" => $situations[13]->id
            ],
            [
                "japaneseSentence" => "先ほど話したことに関連して「AAA」です。",
                "englishSentence" => "This relates to what I was saying earlier [AAA]. ",
                "situation_id" => $situations[13]->id
            ],
            [
                "japaneseSentence" => "これは「AAA」と関係しています。",
                "englishSentence" => "This ties in with [AAA]. ",
                "situation_id" => $situations[13]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "重要な部分は「AAA」です。",
                "englishSentence" => "The significance of this is [AAA]. ",
                "situation_id" => $situations[14]->id
            ],
            [
                "japaneseSentence" => "これは重要です。なぜなら「理由」からです。",
                "englishSentence" => "This is important because [reason]. ",
                "situation_id" => $situations[14]->id
            ],
            [
                "japaneseSentence" => "私たちは「AAA」ということを思い出さなければならない。",
                "englishSentence" => "We have to remember that [AAA]. ",
                "situation_id" => $situations[14]->id
            ],
            [
                "japaneseSentence" => "「AAA」を強調しておきます。",
                "englishSentence" => "It should be emphasized that [AAA]. ",
                "situation_id" => $situations[14]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "他の言い方をすると、「AAA」です。",
                "englishSentence" => "To put it in another way, [AAA]. ",
                "situation_id" => $situations[15]->id
            ],
            [
                "japaneseSentence" => "つまり何が言いたいかというと、「AAA」です。",
                "englishSentence" => "So, what I’m saying is [AAA]. ",
                "situation_id" => $situations[15]->id
            ],
            [
                "japaneseSentence" => "私が言いたいことは、「AAA」です。",
                "englishSentence" => "What I mean to say is [AAA]. ",
                "situation_id" => $situations[15]->id
            ],
            [
                "japaneseSentence" => "もっと簡単にいうと、「AAA」です。",
                "englishSentence" => "To put it more simply, [AAA]. ",
                "situation_id" => $situations[15]->id
            ],
            [
                "japaneseSentence" => "言い換えると、「AAA」です。",
                "englishSentence" => "In other words, [AAA]. ",
                "situation_id" => $situations[15]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "今ままでのところで何か質問はありますか？",
                "englishSentence" => "Do you have any questions, so far? ",
                "situation_id" => $situations[16]->id
            ],
            [
                "japaneseSentence" => "この時点で質問はありますか？",
                "englishSentence" => "Are there any questions at this stage? ",
                "situation_id" => $situations[16]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "Bと比べて、Aは「AAA」を表しています",
                "englishSentence" => "In contrast to B, A shows [AAA]. ",
                "situation_id" => $situations[17]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "Aからすると当然、Bは避けられないのです。",
                "englishSentence" => "One point that follows from A is that we cannot avoid B. ",
                "situation_id" => $situations[18]->id
            ],
            [
                "japaneseSentence" => "Ａが起こった以上、Ｂは不可避です。",
                "englishSentence" => "As a consequence of A occurring, B is inevitable. ",
                "situation_id" => $situations[18]->id
            ],
            [
                "japaneseSentence" => "Aの結果から、Bが起こることが予見されます。",
                "englishSentence" => "From A, it follows that we are going to have to expect B. ",
                "situation_id" => $situations[18]->id
            ],
            [
                "japaneseSentence" => "Aの結果から、Bが起こることが予見されます。",
                "englishSentence" => "We must anticipate that B will be following on from A. ",
                "situation_id" => $situations[18]->id
            ],
            [
                "japaneseSentence" => "「トピック」について申し上げたいことは、以上になります。",
                "englishSentence" => "That’s all I have to say about [topic]. ",
                "situation_id" => $situations[18]->id
            ],
            [
                "japaneseSentence" => "ここまで「トピック」についてお話ししました。",
                "englishSentence" => "So, that concludes my talk on [topic]. ",
                "situation_id" => $situations[18]->id
            ],
            [
                "japaneseSentence" => "最後にお伝えしたいことは、「AAA」。",
                "englishSentence" => "The last thing I’d like to say is [AAA]. ",
                "situation_id" => $situations[18]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "要点をまとめると",
                "englishSentence" => "So to recap, ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "本日の要点をお伝えします。",
                "englishSentence" => "I’m now going to give a brief summary of what I have covered. ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "要約させていただくと、",
                "englishSentence" => "If I can briefly summarize, ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "これまで話してきた内容をまとめたいと思います。",
                "englishSentence" => "Let me summarize the point of our presentation. ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "これまで話してきた最初のトピックをまとめたいと思います。",
                "englishSentence" => "Let me summarize the first topic of our presentation. ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "これまで話してきた最後のトピックをまとめたいと思います。",
                "englishSentence" => "Let me summarize the last topic of our presentation. ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "これまで話してきた内容をまとめ、提言をお話したいと思います。",
                "englishSentence" => "Let me summarize the point of my presentation and make a suggestion. ",
                "situation_id" => $situations[19]->id
            ],
            [
                "japaneseSentence" => "最後に、主要なポイントをもう一度指摘させてください。",
                "englishSentence" => "Before I stop, let me go through my main points again. ",
                "situation_id" => $situations[19]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "結論として、主な要点を要約します。",
                "englishSentence" => "In conclusion, let me sum up my main points. ",
                "situation_id" => $situations[20]->id
            ],
            [
                "japaneseSentence" => "結論として、私が言いたいことは「結論」です。",
                "englishSentence" => "In conclusion, I would like to say is [result]. ",
                "situation_id" => $situations[20]->id
            ],
            [
                "japaneseSentence" => "結論として、「結論」 を言うことを指摘したいと思います。",
                "englishSentence" => "To conclude, I’d like to say that [result]. ",
                "situation_id" => $situations[20]->id
            ],
            [
                "japaneseSentence" => "最後にカギとなるポイントを再度お話しして終わりたいと思います。",
                "englishSentence" => "I’d like to finish by restating the key issue. ",
                "situation_id" => $situations[20]->id
            ],
            [
                "japaneseSentence" => "次のポイントを指摘することで結論としたいと思います。",
                "englishSentence" => "I’d like to conclude by making the following points. ",
                "situation_id" => $situations[20]->id
            ],
            [
                "japaneseSentence" => "これらの調査結果から導き出される結論は何でしょうか？",
                "englishSentence" => "What can we conclude from this those findings? ",
                "situation_id" => $situations[20]->id
            ],
            [
                "japaneseSentence" => "長所と短所を比べて、「結論」という結論に達します。",
                "englishSentence" => "Weighing the pros and cons, I come to the conclusion that [result]. ",
                "situation_id" => $situations[20]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "これで最後の部分が終わりました。",
                "englishSentence" => "That brings us to the end of the final part. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "本日のプレゼンテーションの最後になります。",
                "englishSentence" => "We are coming to the end of today’s presentation. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "以上で私のプレゼンテーションとさせていただきます。ありがとうございます。",
                "englishSentence" => "Well, that’s it from me. Thanks very much. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "これでプレゼン私の話を終わります。",
                "englishSentence" => "That's all for my presentation. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "これでプレゼン私の話を終わります。",
                "englishSentence" => "That concludes my presentation. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "これでプレゼン私の話を終わります。",
                "englishSentence" => "That brings us to the end of my presentation. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "本日のプレゼンテーションの最後になります。",
                "englishSentence" => "We are coming to the end of today’s presentation. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "ご清聴ありがとうございました。",
                "englishSentence" => "Thank you (all) for listening [your attention]. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "ご清聴ありがとうございました。",
                "englishSentence" => "Thank you (all) for being such a good [an attentive] audience. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "お時間をいただきありがとうございました。",
                "englishSentence" => "Thank you for your time. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "ご静聴ありがとうございます。今日この場に立てて嬉しかったです。",
                "englishSentence" => "Thank you all for listening. It was a pleasure being here today. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "ご清聴に感謝しつつ、話を終えさせていただきます。",
                "englishSentence" => "I'd like to finish by thanking you all for your attention. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "本日はプレゼンテーションにご参加していただきありがとうございます。",
                "englishSentence" => "Thank you once again for taking the time to join today’s presentation. ",
                "situation_id" => $situations[21]->id
            ],
            [
                "japaneseSentence" => "本日は時間を割いていただきありがとうございました。",
                "englishSentence" => "Thanks so much for taking the time to join today. ",
                "situation_id" => $situations[21]->id
            ],
// ------------------------------------------------------------------------------------------------------------------------------
            [
                "japaneseSentence" => "もう一度繰り返していただけますか。",
                "englishSentence" => "Could you say that again? ",
                "situation_id" => $situations[22]->id
            ],
            [
                "japaneseSentence" => "ご質問の内容をよく理解できません。",
                "englishSentence" => "I don’t quite understand your question. ",
                "situation_id" => $situations[22]->id
            ],
            [
                "japaneseSentence" => "ご質問がありましたらご遠慮なくどうぞ。",
                "englishSentence" => "If you have any questions, I’d be happy to answer them. ",
                "situation_id" => $situations[22]->id
            ],
            [
                "japaneseSentence" => "もしご質問がありましたら、喜んで回答させていただきます。",
                "englishSentence" => "If you have any questions, I’d be happy to answer them now. ",
                "situation_id" => $situations[22]->id
            ],
            [
                "japaneseSentence" => "どなたかご質問はございますか。",
                "englishSentence" => "Does anyone have any questions? ",
                "situation_id" => $situations[22]->id
            ],
            [
                "japaneseSentence" => "今の話について疑問や質問はありますか？",
                "englishSentence" => "Any comments or questions on the points I talked about? ",
                "situation_id" => $situations[22]->id
            ],
            [
                "japaneseSentence" => "質問が聞き取れませんでした。",
                "englishSentence" => "I didn’t catch your question. ",
                "situation_id" => $situations[22]->id
            ]

    	];

    	foreach ($phrases as $phrase) {
    		DB::table("phrases")->insert([
    			"japaneseSentence" => $phrase["japaneseSentence"],
                "englishSentence" => $phrase["englishSentence"],
                "situation_id" => $phrase["situation_id"],
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
