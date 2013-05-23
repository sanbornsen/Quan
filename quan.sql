-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2013 at 02:06 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quan`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT,
  `q_id` int(4) NOT NULL,
  `a_body` text NOT NULL,
  `vote` varchar(1000) DEFAULT NULL,
  `add_time` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `q_id`, `a_body`, `vote`, `add_time`, `last_update`, `user_id`) VALUES
(28, 8, '<p>I am waiting for a good answer, also thinking a good answer for it myself, but I guess if I really start listing problems in students of NITMAS here, one blob of database may be overflowed :P, I may have need a file linked for that. :P Well, jokes a part. Let&#39;s wait for some good answers.</p>\r\n', '37|29', '2013-05-06 09:39:05', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(34, 8, '<p>Bad college, bad students..!!</p>\r\n', NULL, '2013-05-06 14:15:48', '0000-00-00 00:00:00', 'Anonymus sudipta_it13_2010'),
(36, 8, '<p>they dont have any problem, it is the real problem with them..</p>\r\n', '1', '2013-05-06 16:13:28', '0000-00-00 00:00:00', 'md.danish_it28_2010'),
(38, 13, '<p><font size="3">I am not scared of coding...huh...!! bas thoda dar lagta hei.. :P ki bychance humse na ho <font size="3">j</font>aye..!!</font></p>\r\n', NULL, '2013-05-06 16:37:58', '0000-00-00 00:00:00', 'durgesh_cse16_2010'),
(39, 13, '<p>Becoz most thnk of it as a &quot;alien&quot; stuff.</p>\r\n\r\n<p>&quot;Sala sikha na be.. How do you do this. Abe kaise bna liya be.. Abe mujhe v bta de na be... Tu kuch sikhata hi ni...&quot; n ol..</p>\r\n\r\n<p>Some &quot;shows&quot; interest.. just to &quot;show&quot; that.&nbsp;</p>\r\n\r\n<p>No one tought us. Its ows passion that make us to&nbsp;code..problem solving, or development.</p>\r\n\r\n<p>Sudipto / Rishi da.. u both r gggr8! An awsum iniciative.</p>\r\n', '1', '2013-05-06 18:35:07', '0000-00-00 00:00:00', 'Anonymus tanay_cse57_2011'),
(42, 13, '<p>Thank you bro, who ever you are. :)</p>\r\n', NULL, '2013-05-06 20:13:40', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(43, 21, '<p>I guess, this is not that attractive yet, still without internet intra college communication is not at all bad, isn&#39;t it? I&#39;ll be updating features day by day, hope people will love it later on, and I&#39;m sure this will be a very usefull product to the college.</p>\r\n', '1|30|10|29', '2013-05-06 21:36:58', '0000-00-00 00:00:00', 'admin'),
(44, 21, '<p>Test answer for voting answers</p>\r\n', '39|1|37', '2013-05-07 10:01:13', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(45, 21, '<p>Test answer for answer link on notification</p>\r\n', '37', '2013-05-07 11:53:54', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(46, 21, '<p>Wow, everything is working cool :)</p>\r\n', '1', '2013-05-07 11:55:21', '0000-00-00 00:00:00', 'TestUser'),
(47, 13, '<p>Answer links are also working fine :) m so happy</p>\r\n', '12|1', '2013-05-07 11:56:28', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(48, 21, 'It ll take tym to get popular bro...', '41|1|12|29', '2013-05-07 12:07:54', '0000-00-00 00:00:00', 'aditya_it22_2010'),
(49, 22, '<p>Write some awesome code <strong>YOURSELF.</strong></p>\r\n', '10|1|30|3|39', '2013-05-07 12:33:51', '0000-00-00 00:00:00', 'Anonymus rishi_cse36_2010'),
(50, 22, '<p>Try do some thing new.</p>\r\n', NULL, '2013-05-07 12:49:31', '0000-00-00 00:00:00', 'Anonymus durgesh_cse16_2010'),
(51, 22, '<p>I wouldsurely &nbsp;love 2 &nbsp;organize a PROM NIGHT !! in NITMAs... :P &nbsp;:P</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1|45|12|51|30', '2013-05-07 13:26:56', '0000-00-00 00:00:00', 'Anonymus srotoswini_it01_2010'),
(53, 13, '<p>programming approach is sumthin dat cums frm oneslf!! one mst try on nd on 2 clear d concepts.. bt 4 ppl lyk us,whu hav vry less proggramin approach mst get some classes frm pll lyk Sudipta Sen or Rishi Mukherjee. :) Pls do help us...</p>\r\n', '1', '2013-05-07 13:30:45', '0000-00-00 00:00:00', 'Anonymus srotoswini_it01_2010'),
(54, 13, '<p>Well, this sounds good, but the problem is, we don&#39;t find well response after giving a class on any topic, though we chose very simple, easier things to explain. There are fathers of programming all over the world, they are on Quora, facebook. You can learn programming from anywhere, it&#39;s age of open source. So I don&#39;t think, we are athe only option to learn.<br />\r\n<strong>Some source of learning:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>coursera.org</strong></li>\r\n	<li><strong>khan academy</strong></li>\r\n	<li><strong>stackoverflow.com</strong></li>\r\n</ul>\r\n\r\n<p>There are lots of resources, still if you think you&#39;ll feel comfortable to learn from someone of your buddies, then post your doubts and questions at <strong>Quan. </strong>You&#39;ll surely get someone to answer you as well as you want.</p>\r\n', '29|12', '2013-05-07 13:38:18', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(55, 23, '<p>Thats true. When I&nbsp;thought about my college life, the picture in my mind was somewhat different than what it is at present. We can do much better as compared to others as we get more exposure to interact due to it being a residential college. But it also depends from&nbsp;one individual to other. The basic problem lies in the fact of the gender biasing. A boy and a girl together are always suspected to be something else other than just friends.</p>\r\n', '29', '2013-05-07 14:12:57', '0000-00-00 00:00:00', 'Anonymus trishita_cse59_2011'),
(56, 22, '<p><big><tt>Organise a girls vs boys football and cricket match in our very own football ground. :)</tt></big></p>\r\n', '39|29|10|30', '2013-05-07 14:19:57', '0000-00-00 00:00:00', 'trishita_cse59_2011'),
(57, 23, '<p>If we try to find out the definition of senior then we&#39;ll get<br />\r\n<strong>A person who is a specified number of years older than someone else.</strong></p>\r\n\r\n<p>Some people out there in NITMAS have made their own meaning of Senior. For them senior is someone:</p>\r\n\r\n<ul>\r\n	<li>Who knows everything.</li>\r\n	<li>Who can not be wrong to their juniors.</li>\r\n	<li>His/Her decision is final to for his juniors.</li>\r\n	<li>He/She can give orders or restriction to their juniors.</li>\r\n	<li>Juniors should always respect them.</li>\r\n</ul>\r\n\r\n<p>and hell lot more...</p>\r\n\r\n<p>If I have something to get respect from my juniors, I&#39;ll get that for nothing, i don&#39;t need to make him scared to get my due respect or call them to my room and ask for respect.</p>\r\n\r\n<p><strong>The problems in college like us is basically:</strong></p>\r\n\r\n<ul>\r\n	<li>My seniors have done this to me, then I have full rite to do this to my juniors.</li>\r\n	<li>If you talk to some of your juniors like friend, your batchmates are there to pinch you.</li>\r\n	<li>If a junior guy got a beautiful girl with him, it makes seniors frustrating, :P more over if that girl was approached by any senior before. :P ;)</li>\r\n	<li>If a junior make something creative, being a senior dominate them saying, &quot;this is wrong, that is wrong, isse a66a to hum bana lete&quot;. (my answer: aap banaye kyun nehi? )</li>\r\n	<li>They can&#39;t see their juniors having fun, or making birthday parties at tea junction, while they are around. It&#39;s so called insult of a senior.</li>\r\n</ul>\r\n\r\n<p>These are very few points among a lot that makes a gap between seniors and juniors.</p>\r\n\r\n<p><strong>Solution:</strong></p>\r\n\r\n<p>We all know about the solutions, just don&#39;t apply them, if I lose my dignity to my junior..!!</p>\r\n\r\n<p>Try to go through <em><strong><a href="http://www.go-nxg.com/?p=5959">this blog Post</a></strong></em>, this&#39;ll surely help, how a senior should be.</p>\r\n', '45|1|37|39|12', '2013-05-07 14:37:46', '0000-00-00 00:00:00', 'Anonymus sudipta_it13_2010'),
(59, 23, '<p>its we who creates the relation and thus it is so..as we are so formal and awkward...</p>\r\n', NULL, '2013-05-07 19:01:35', '0000-00-00 00:00:00', 'Anonymus md.danish_it28_2010'),
(62, 22, '<h3>get a handsome JOB,&nbsp;<span style="color: rgb(85, 85, 85); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: normal;">make good friends, they would remember you after leaving NITMAS.</span></h3>\r\n', '1|10|64|12', '2013-05-07 19:07:52', '0000-00-00 00:00:00', 'md.danish_it28_2010'),
(63, 8, '<p>The main problem is the stunted mentality and insecurity of&nbsp;the minds of the management as well as the students who are directly affected by that. If all the students can come together to solve each others&#39; problems then maybe such a question would&nbsp;never even arise.</p>\r\n', '1|29|29|12', '2013-05-08 00:22:26', '0000-00-00 00:00:00', 'trishita_cse59_2011'),
(64, 25, '<h2><strong>That&#39;s a funny question.. :P LOL..!!</strong></h2>\r\n', '29|10', '2013-05-08 14:24:14', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(65, 25, '<p>:D a lesson</p>\r\n\r\n<p><strong>NEVER EVER</strong> BE A FACULTY.. :D&nbsp;:D</p>\r\n', '1|51|10|50|67', '2013-05-08 19:05:57', '0000-00-00 00:00:00', 'tanay_cse57_2011'),
(66, 21, '<p>when voting a answer. the whole page is refreshed and by default&nbsp;moves to the top. In a way its good that if there r other changes, they gets updated but if the list of answer is too long, then it will be really unpleasant to browse down to the previous answer every time we vote it up/down.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>And checkout the image option of html editor. needs some fix.</p>\r\n', '50|45', '2013-05-08 19:18:20', '0000-00-00 00:00:00', 'tanay_cse57_2011'),
(67, 21, '<p>@Tanay, I&#39;ll use some ajax call here, need some time for this. I have stopped developing till the exam.</p>\r\n', '39|12', '2013-05-08 21:33:35', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(68, 24, '<p>Obviously Siddhartha Sir. If he would not have been here, I am sure I would have registered for some Rs. 6000 training this summer instead of an internship. Also, I would have asked, &#39;Python? Is that a snake?&#39;..:P</p>\r\n', '1|30|10|50', '2013-05-09 00:10:59', '0000-00-00 00:00:00', 'rishi_cse36_2010'),
(69, 26, '<p>Well, this is a god question. :P</p>\r\n\r\n<p>Answer depends on the type of date you want.&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Victoria :&nbsp;</strong>I had my first kiss in Victoria, even proposed my girl there. This is indeed a very beautiful place for dating, specially the night light show at victoria in a wintry night is awsome. If you wanna make a little love&nbsp;there, you can, but better be aware of police (still not that much of problem).</li>\r\n	<li><strong>Citizen&#39;s park&nbsp;:&nbsp;</strong>It&#39;s also a very good place near Ravindra Sadan. No problem of police, but a little decent park. Evening light-fountain show is great when you have his/her hand in yours. :)</li>\r\n	<li><strong>Sarovar Lake :&nbsp;</strong>Nice place, but little dirty. People around tha places are not so standard, but still you can try that place. Police and <a href="http://en.wikipedia.org/wiki/Hijra_(South_Asia)">Hijras</a>&nbsp;are very big problem.</li>\r\n	<li><strong>Dhakuria Lake :&nbsp;</strong>Wonderful place, my favourite infact. I usually go there&nbsp;very often&nbsp;with her. It&#39;s a greeny, cool, pieceful place. Excluding the problems come from police and hijras it&#39;s a good place to roam around together. There is a&nbsp;nice <span style="font-size: small;">restaurant</span> named &quot;In Thalia&quot; near by, you should try Chicken ham&nbsp;over there. Over all the place is very good for a descent date.</li>\r\n	<li><strong>Nalban : </strong>I never been there, but I have heard this is a nice place for couples. No Police problem is there. There is a big lake with boating facilities. I have got a very good review about that place, you should try it once, infact I&#39;m also gonna try after my semester.</li>\r\n	<li><strong>Princep Ghat :&nbsp;</strong>Quit a good place, nice view of Howrah bridge. You can have a ride of boats on The Ganges for 300 bucks, and that ride can be very romantic during the sunset. Nice decorated place, good environment.</li>\r\n</ol>\r\n\r\n<p>There are many more. Kolkata is a city of Love. I don&#39;t belong to Kolkata, so better I wait for some good answers from people who belongs to here. :) :)<br />\r\n&nbsp;</p>\r\n\r\n<p>- Happy Dating</p>\r\n', '1|12|39|30|4', '2013-05-09 00:53:35', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(70, 25, '<p>lots of formalities...show off of fake knowledge,&nbsp;</p>\r\n', '1|10', '2013-05-09 11:44:16', '0000-00-00 00:00:00', 'Anonymus md.danish_it28_2010'),
(72, 27, '<p><font size="3">You can not compare PHP and Java. Both are good in their own area.</font></p>\r\n\r\n<p><font size="3">I would suggest <strong>PHP </strong>as it gives you a lot of job oportunity in current market. <strong>Java </strong>is good indeed, but now if you can learn <strong>Clojure </strong>then go for that, otherwise it would be better to stick with <strong>PHP</strong>.</font></p>\r\n', '4|50', '2013-05-09 19:10:16', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(73, 27, '<p>Its like you are asking me what you want to eat for dinner. Idly or Dosa? Which one you prefer? Which one do you feel like eating today? Which tastes better to you? Figure these out and you will be fine.</p>\r\n', '12|1|10|45', '2013-05-09 21:22:27', '0000-00-00 00:00:00', 'indradhanush_it29_2010'),
(74, 27, '<p>I liked Indradhanush&#39;s answer. Adding to it, looking at the market scenario, it depends. Here&#39;s an algorithm for selecting one of them:</p>\r\n\r\n<p>If you like programming:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; If you like web programming:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; go for PHP(Be sure to go with some basics of Databases)</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; else:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Assuming you like backend tasks like algorithms)go for Java</p>\r\n\r\n<p>else:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; choose any of those. non of them will matter.</p>\r\n\r\n<p>Here&#39;s what is the most important part here. Go there and try to learn something. After its over, be sure to implement something with the learning you had. If you don&#39;t, be sure that the training will be a waste. Example: Implement something like this(Quan).</p>\r\n\r\n<p>At last, language does not matter. You get to work on languages like scala, erlang, clojure etc in start-ups. You learn by doing. All the best.</p>\r\n', '10|1|3|45', '2013-05-09 23:58:45', '0000-00-00 00:00:00', 'rishi_cse36_2010'),
(76, 27, '<p>It is depend on your&nbsp;intrest.</p>\r\n', NULL, '2013-05-10 15:37:07', '0000-00-00 00:00:00', 'Anonymus durgesh_cse16_2010'),
(77, 28, '<p>In case you need to change your answer, you have delete it and right a new answer for now, We&#39;ll be giving an edit facility later on. But what <strong>ERROR </strong>you are talking about? Can you please explain, how did you try to edit your answer?</p>\r\n', '1|4', '2013-05-10 16:29:53', '0000-00-00 00:00:00', 'admin'),
(79, 29, '<p>This is really a problem, what lead someone to face a serious disadvantage in the time of campusing. But learning English is not that tough, infact some point of time I realize, that english is a easier language than Bengali and Hindi, and really very quick learnable. Just we need to follow certain things to make us well in spoken english.</p>\r\n\r\n<p><strong>Things to be followed:</strong></p>\r\n\r\n<ul>\r\n	<li>Always try to speak in English with your friend in campus, even if you are not able to. Just try hard, if you are stucked, stop and again try to speak, but don&#39;t give it up.</li>\r\n	<li>Watch <strong>English Movies. </strong>Trust me, that is seriously helpful, but without subtitle. If you are not able to get something just pause it, backward then again listen carefully. Observe how they are speaking.</li>\r\n	<li>Listen some good <strong>English Songs. </strong>In case you are not able to understand, just go through the lyrics once, then listen it.</li>\r\n	<li>Don&#39;t be hurry or try to copy anyone elses accent that you have heard from somewhere else, just say it with your own way with a best pronunciation practice you can.</li>\r\n	<li>Try to read english aloud in English for 15-20 mins daily, that will surely help.</li>\r\n	<li>Don&#39;t be shy or be scared of speaking in English or just don&#39;t give up while you are not able to.</li>\r\n</ul>\r\n\r\n<p>There was a post on rediff. Go through it once. Here is the <a href="http://www.rediff.com/getahead/2005/sep/02accent.htm" target="_blank">link</a>.</p>\r\n\r\n<p><strong>Message for well English speaker:</strong></p>\r\n\r\n<ul>\r\n	<li>Please don&#39;t make fun of your friends who are not good in spoken English, he/she may loose self confidence. You will be the responsible person in case he/she doesn&#39;t come up with a better English afterward.</li>\r\n	<li>If your friend is stucked in somewhere or mistaking something, instead of making fun, help him to get rid of this.</li>\r\n</ul>\r\n\r\n<p><strong>The most important thing is practice. I always wanted everyone to speak in English in the campus, and that is really important. Intentionally learning a language is not the actual way to learn it. You have to culture it to learn it.</strong></p>\r\n', '45|12|10|4|14|1', '2013-05-10 23:30:12', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(80, 26, '<p>The awesomeness of a place lies in the awesomeness of your date. If you are with a person you love then any place will become the most romantic place. At least my experiences suggest so, because most of the places we went for were very ordinary but it is our bond that made it feel special and extraordinary. Well now let me list some of them down------</p>\r\n\r\n<p><strong>Millenium Park-&nbsp;</strong>It a quite a calm and quite place along the riverside of the picturesque Ganges where you can feel the natural goodness of the place as well as walk through its enormous stretch enjoying its beautifully architectured garden helding each other&#39;s hand.</p>\r\n\r\n<p><strong>Eden Gardens-</strong> Though it may seem to be an odd one out but trust me amidst the crowd when you both are together cheering and enjoying the matches in the cricket stadium with its huge grandeur and liveliness makes you remember every moment of it.It also has got a small Burmese pagoda set in a small lake inside the garden.</p>\r\n\r\n<p><strong>Maidan-</strong>&nbsp;It very much lies in the heart of the city. Its huge expanse of the lush green area centering around Fort William, makes it for&nbsp;healthy dating amidst greenery. It is a hub of diverse activities where you can enjoy the nostalgia with your partner amongst nature under the blue sky or maybe want to take a horse ride.. You may also visit the St.Paul&#39;s cathedral church nearby to fulfil both of your wishes or take a long romantic walk along the stretch of the Chowringhee Road.</p>\r\n\r\n<p><strong>The Marble Palace-&nbsp;</strong>At Chorbagan is located a palace built by Raja Rajendra Mullick, which now has been converted into a museum. Huge beautiful out of the world paintings,artifacts and different antiques are present there. It is a quite place with surrounded greenery where you can spent a solemn afternoon, then after that you may take a tram ride along Red Road enjoying a quick glance at the city life of Kolkata.</p>\r\n\r\n<p><strong>Nicco Park and Wet-o-Wild-&nbsp;</strong>A whole day can be spent in this wonderful amusement park where you can enjoy both the dry as well as the wet rides. To feel the adrenaline rush you have rides like &#39;Cyclone&#39; and &#39;Water-Chute&#39; or you may get a quite getaway along the ropeway with your partner. Whereas the wet water-park gets you an artificial sea-shore to enjoy with timely waves and you may cosy up to your partner at the &#39;Niagra Falls&#39;. All this and more sums up an unforgattable day.</p>\r\n\r\n<p><strong>Super Bowl-&nbsp;</strong>Now if both of you are more into sports then there&#39;s the bowling, pool ,air hockey and drinks all under the same roof at this hub with great foot-tapping music to enjoy. It makes it for a cute competition among you both.</p>\r\n\r\n<p>Apart from these you have the malls in our city out of which my favourite for romantic dates are the two &#39;City-Centre&#39;s located at north kolkata. Or you may try out the pubs in the cuty. If you are a great fan of street food then Vivekananda Park is the place to be. This city also offers you the Zoological Garden and the Botanical Garden. And all the same as that of Sudipta da.</p>\r\n\r\n<p>P.S- When planning a date just keep in mind the tastes and interests of your partner.<strong> :) </strong>-----<strong>Best Of Luck.</strong></p>\r\n', '1|12', '2013-05-10 23:56:14', '0000-00-00 00:00:00', 'trishita_cse59_2011'),
(81, 29, '<ol>\r\n	<li>Read english newspapers daily and try to find word meaning in the dictionary.</li>\r\n	<li>Speak in front of the mirror daily for a few minutes this improves your confidence level.</li>\r\n</ol>\r\n', '1|12', '2013-05-11 00:18:32', '0000-00-00 00:00:00', 'trishita_cse59_2011'),
(82, 29, '<p>Ask yourself how you learned your mother language before going to school. Thats how human brain learn. Now recurse for other languages.</p>\r\n', '45|1|4|58', '2013-05-11 02:20:48', '0000-00-00 00:00:00', 'rishi_cse36_2010'),
(85, 30, '<p>because they follow procedural language, unaware of the fact that the time has moved on to the object-oriented.</p>\r\n', '14|12|10|1', '2013-05-12 15:04:01', '0000-00-00 00:00:00', 'md.danish_it28_2010'),
(86, 27, '<p>its the question you should ask yourself, what best suits you: java or php?</p>\r\n', NULL, '2013-05-12 15:06:46', '0000-00-00 00:00:00', 'md.danish_it28_2010'),
(87, 31, '<p>Similar question has been asked..!!</p>\r\n', NULL, '2013-05-22 21:15:23', '0000-00-00 00:00:00', 'sudipta_it13_2010');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `not_id` int(10) NOT NULL AUTO_INCREMENT,
  `q_id` int(5) NOT NULL,
  `a_id` int(10) NOT NULL,
  `person1` varchar(50) NOT NULL,
  `person2` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`not_id`, `q_id`, `a_id`, `person1`, `person2`, `activity`) VALUES
(7, 21, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/21">Question</a></b>'),
(8, 21, 0, 'admin', 'Anonymus sudipta_it13_2010', '<b>admin</b> has answered a <b><a href="/quan/question/21">Question</a></b> '),
(5, 13, 0, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has answered a <b><a href="/quan/question/13">Question</a></b> '),
(9, 0, 0, 'TestUser', '', '<b>TestUser</b> is now on Quan'),
(10, 0, 0, 'sanborn_it13_2010(test user)', '', '<b>sanborn_it13_2010(test user)</b> is now on Quan'),
(13, 0, 0, 'shatanik_bt09_2010', '', '<b>shatanik_bt09_2010</b> is now on Quan'),
(14, 21, 0, 'sudipta_it13_2010', 'Anonymus sudipta_it13_2010', '<b>sudipta_it13_2010</b> has answered a <b><a href="/quan/question/21">Question</a></b> '),
(15, 21, 0, 'sudipta_it13_2010', 'Anonymus sudipta_it13_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/45">answered</a> a <b><a href="/quan/question/21">Question</a></b> '),
(16, 21, 0, 'TestUser', 'Anonymus sudipta_it13_2010', '<b>TestUser</b> has <a href="/quan/answers/46">answered</a> a <b><a href="/quan/question/21">Question</a></b> '),
(17, 13, 0, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/47">answered</a> a <b><a href="/quan/question/13">Question</a></b> '),
(18, 21, 0, 'aditya_it22_2010', 'Anonymus sudipta_it13_2010', '<b>aditya_it22_2010</b> has <a href="/quan/answers/48">answered</a> a <b><a href="/quan/question/21">Question</a></b> '),
(19, 0, 0, 'dipayan_it32_2010', '', '<b>dipayan_it32_2010</b> is now on Quan'),
(20, 22, 0, 'vikram_cse60_2010', '', '<b>vikram_cse60_2010</b> has added a new <b><a href="/quan/question/22">Question</a></b>'),
(21, 22, 0, 'Anonymus User', 'vikram_cse60_2010', '<b>Anonymus User</b> has <a href="/quan/answers/49">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(22, 0, 0, 'amit_cse04_2010', '', '<b>amit_cse04_2010</b> is now on Quan'),
(23, 22, 0, 'Anonymus User', 'vikram_cse60_2010', '<b>Anonymus User</b> has <a href="/quan/answers/50">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(24, 0, 0, 'parin_it16_2010', '', '<b>parin_it16_2010</b> is now on Quan'),
(25, 0, 0, 'srotoswini_it01_2010', '', '<b>srotoswini_it01_2010</b> is now on Quan'),
(26, 22, 0, 'Anonymus User', 'vikram_cse60_2010', '<b>Anonymus User</b> has <a href="/quan/answers/51">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(27, 22, 0, 'sudipta_it13_2010', 'vikram_cse60_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/52">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(28, 13, 0, 'Anonymus User', 'sudipta_it13_2010', '<b>Anonymus User</b> has <a href="/quan/answers/53">answered</a> a <b><a href="/quan/question/13">Question</a></b> '),
(29, 13, 0, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/54">answered</a> a <b><a href="/quan/question/13">Question</a></b> '),
(30, 0, 0, 'trishita_cse59_2011', '', '<b>trishita_cse59_2011</b> is now on Quan'),
(31, 23, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/23">Question</a></b>'),
(32, 23, 0, 'Anonymus User', 'Anonymus trishita_cse59_2011', '<b>Anonymus User</b> has <a href="/quan/answers/55">answered</a> a <b><a href="/quan/question/23">Question</a></b> '),
(33, 22, 0, 'trishita_cse59_2011', 'vikram_cse60_2010', '<b>trishita_cse59_2011</b> has <a href="/quan/answers/56">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(34, 23, 0, 'Anonymus User', 'Anonymus trishita_cse59_2011', '<b>Anonymus User</b> has <a href="/quan/answers/57">answered</a> a <b><a href="/quan/question/23">Question</a></b> '),
(35, 0, 0, 'rohan_it32_2010', '', '<b>rohan_it32_2010</b> is now on Quan'),
(36, 0, 0, 'rahul_it36_2011', '', '<b>rahul_it36_2011</b> is now on Quan'),
(37, 23, 0, 'Anonymus User', 'Anonymus trishita_cse59_2011', '<b>Anonymus User</b> has <a href="/quan/answers/58">answered</a> a <b><a href="/quan/question/23">Question</a></b> '),
(38, 23, 0, 'Anonymus User', 'Anonymus trishita_cse59_2011', '<b>Anonymus User</b> has <a href="/quan/answers/59">answered</a> a <b><a href="/quan/question/23">Question</a></b> '),
(39, 22, 0, 'Anonymus User', 'vikram_cse60_2010', '<b>Anonymus User</b> has <a href="/quan/answers/60">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(40, 22, 0, 'Anonymus User', 'vikram_cse60_2010', '<b>Anonymus User</b> has <a href="/quan/answers/61">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(41, 22, 0, 'md.danish_it28_2010', 'vikram_cse60_2010', '<b>md.danish_it28_2010</b> has <a href="/quan/answers/62">answered</a> a <b><a href="/quan/question/22">Question</a></b> '),
(45, 24, 0, 'sudipta_it13_2010', '', '<b>sudipta_it13_2010</b> has added a new <b><a href="/quan/question/24">Question</a></b>'),
(43, 0, 0, 'prama_bt12_2011', '', '<b>prama_bt12_2011</b> is now on Quan'),
(44, 8, 0, 'trishita_cse59_2011', 'rishi_cse36_2010', '<b>trishita_cse59_2011</b> has <a href="/quan/answers/63">answered</a> a <b><a href="/quan/question/8">Question</a></b> '),
(46, 0, 0, 'indranil_cse20_2011', '', '<b>indranil_cse20_2011</b> is now on Quan'),
(47, 25, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/25">Question</a></b>'),
(48, 25, 0, 'sudipta_it13_2010', 'Anonymus vikram_cse60_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/64">answered</a> a <b><a href="/quan/question/25">Question</a></b> '),
(49, 25, 0, 'tanay_cse57_2011', 'Anonymus vikram_cse60_2010', '<b>tanay_cse57_2011</b> has <a href="/quan/answers/65">answered</a> a <b><a href="/quan/question/25">Question</a></b> '),
(50, 21, 0, 'tanay_cse57_2011', 'Anonymus sudipta_it13_2010', '<b>tanay_cse57_2011</b> has <a href="/quan/answers/66">answered</a> a <b><a href="/quan/question/21">Question</a></b> '),
(51, 21, 0, 'sudipta_it13_2010', 'Anonymus sudipta_it13_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/67">answered</a> a <b><a href="/quan/question/21">Question</a></b> '),
(52, 0, 0, 'ashish_cse12_2011', '', '<b>ashish_cse12_2011</b> is now on Quan'),
(54, 24, 0, 'rishi_cse36_2010', 'sudipta_it13_2010', '<b>rishi_cse36_2010</b> has <a href="/quan/answers/68">answered</a> a <b><a href="/quan/question/24">Question</a></b> '),
(55, 26, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/26">Question</a></b>'),
(56, 0, 0, 'swarnali_bt14_2010', '', '<b>swarnali_bt14_2010</b> is now on Quan'),
(57, 26, 0, 'Anonymus User', 'Anonymus rishi_cse36_2010', '<b>Anonymus User</b> has <a href="/quan/answers/69">answered</a> a <b><a href="/quan/question/26">Question</a></b> '),
(58, 0, 69, 'sanborn_it13_2010(test user)', 'Anonymus sudipta_it13_2010', '<b>sanborn_it13_2010(test user)</b> has voted up an <a href="/quan/answers/69">answer</a> posted by '),
(59, 0, 67, 'sanborn_it13_2010(test user)', 'sudipta_it13_2010', '<b>sanborn_it13_2010(test user)</b> has voted up an <a href="/quan/answers/67">answer</a> posted by '),
(60, 0, 0, 'rahul_it19_2010', '', '<b>rahul_it19_2010</b> is now on Quan'),
(61, 0, 69, 'aditya_it22_2010', 'Anonymus sudipta_it13_2010', '<b>aditya_it22_2010</b> has voted up an <a href="/quan/answers/69">answer</a> posted by '),
(62, 0, 68, 'aditya_it22_2010', 'rishi_cse36_2010', '<b>aditya_it22_2010</b> has voted up an <a href="/quan/answers/68">answer</a> posted by '),
(63, 0, 49, 'aditya_it22_2010', 'Anonymus rishi_cse36_2010', '<b>aditya_it22_2010</b> has voted up an <a href="/quan/answers/49">answer</a> posted by '),
(64, 0, 51, 'aditya_it22_2010', 'Anonymus srotoswini_it01_2010', '<b>aditya_it22_2010</b> has voted up an <a href="/quan/answers/51">answer</a> posted by '),
(65, 0, 56, 'aditya_it22_2010', 'trishita_cse59_2011', '<b>aditya_it22_2010</b> has voted up an <a href="/quan/answers/56">answer</a> posted by '),
(66, 0, 64, 'vikram_cse60_2010', 'sudipta_it13_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/64">answer</a> posted by '),
(67, 0, 65, 'vikram_cse60_2010', 'tanay_cse57_2011', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/65">answer</a> posted by '),
(68, 0, 68, 'vikram_cse60_2010', 'rishi_cse36_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/68">answer</a> posted by '),
(69, 25, 0, 'Anonymus User', 'Anonymus vikram_cse60_2010', '<b>Anonymus User</b> has <a href="/quan/answers/70">answered</a> a <b><a href="/quan/question/25">Question</a></b> '),
(70, 0, 70, 'sudipta_it13_2010', 'Anonymus md.danish_it28_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/70">answer</a> posted by '),
(71, 0, 70, 'vikram_cse60_2010', 'Anonymus md.danish_it28_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/70">answer</a> posted by '),
(72, 0, 69, 'durgesh_cse16_2010', 'sudipta_it13_2010', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/69">answer</a> posted by '),
(74, 0, 0, 'purvi_cse32_2010', '', '<b>purvi_cse32_2010</b> is now on Quan'),
(75, 0, 0, 'sweta_cse10_2010', '', '<b>sweta_cse10_2010</b> is now on Quan'),
(76, 0, 54, 'rishi_cse36_2010', 'sudipta_it13_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/54">answer</a> posted by '),
(77, 0, 47, 'rishi_cse36_2010', 'sudipta_it13_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/47">answer</a> posted by '),
(78, 0, 28, 'tanay_cse57_2011', 'sudipta_it13_2010', '<b>tanay_cse57_2011</b> has voted up an <a href="/quan/answers/28">answer</a> posted by '),
(79, 27, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/27">Question</a></b>'),
(81, 27, 0, 'sudipta_it13_2010', 'Anonymus dipayan_it32_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/72">answered</a> a <b><a href="/quan/question/27">Question</a></b> '),
(84, 0, 0, 'rupesh_cse37_2010', '', '<b>rupesh_cse37_2010</b> is now on Quan'),
(85, 0, 47, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/47">answer</a> posted by '),
(86, 27, 0, 'indradhanush_it29_2010', 'Anonymus dipayan_it32_2010', '<b>indradhanush_it29_2010</b> has <a href="/quan/answers/73">answered</a> a <b><a href="/quan/question/27">Question</a></b> '),
(87, 0, 49, 'indradhanush_it29_2010', 'Anonymus rishi_cse36_2010', '<b>indradhanush_it29_2010</b> has voted up an <a href="/quan/answers/49">answer</a> posted by '),
(88, 0, 49, 'sanborn_it13_2010(test user)', 'Anonymus rishi_cse36_2010', '<b>sanborn_it13_2010(test user)</b> has voted up an <a href="/quan/answers/49">answer</a> posted by '),
(89, 0, 73, 'rishi_cse36_2010', 'indradhanush_it29_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/73">answer</a> posted by '),
(90, 0, 73, 'sudipta_it13_2010', 'indradhanush_it29_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/73">answer</a> posted by '),
(91, 27, 0, 'rishi_cse36_2010', 'Anonymus dipayan_it32_2010', '<b>rishi_cse36_2010</b> has <a href="/quan/answers/74">answered</a> a <b><a href="/quan/question/27">Question</a></b> '),
(92, 0, 73, 'vikram_cse60_2010', 'indradhanush_it29_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/73">answer</a> posted by '),
(93, 0, 74, 'vikram_cse60_2010', 'rishi_cse36_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/74">answer</a> posted by '),
(94, 0, 74, 'sudipta_it13_2010', 'rishi_cse36_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/74">answer</a> posted by '),
(95, 0, 67, 'rishi_cse36_2010', 'sudipta_it13_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/67">answer</a> posted by '),
(96, 0, 74, 'indradhanush_it29_2010', 'rishi_cse36_2010', '<b>indradhanush_it29_2010</b> has voted up an <a href="/quan/answers/74">answer</a> posted by '),
(97, 0, 72, 'durgesh_cse16_2010', 'sudipta_it13_2010', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/72">answer</a> posted by '),
(98, 27, 0, 'Anonymus User', 'Anonymus dipayan_it32_2010', '<b>Anonymus User</b> has <a href="/quan/answers/75">answered</a> a <b><a href="/quan/question/27">Question</a></b> '),
(99, 27, 0, 'Anonymus User', 'Anonymus dipayan_it32_2010', '<b>Anonymus User</b> has <a href="/quan/answers/76">answered</a> a <b><a href="/quan/question/27">Question</a></b> '),
(100, 28, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/28">Question</a></b>'),
(101, 28, 0, 'admin', 'Anonymus durgesh_cse16_2010', '<b>admin</b> has <a href="/quan/answers/77">answered</a> a <b><a href="/quan/question/28">Question</a></b> '),
(102, 0, 72, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/Quan/answers/72">answer</a> posted by '),
(103, 0, 77, 'sudipta_it13_2010', 'admin', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/77">answer</a> posted by '),
(104, 0, 77, 'durgesh_cse16_2010', 'admin', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/77">answer</a> posted by '),
(105, 0, 77, 'vikram_cse60_2010', 'admin', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/77">answer</a> posted by '),
(106, 0, 73, 'trishita_cse59_2011', 'indradhanush_it29_2010', '<b>trishita_cse59_2011</b> has voted up an <a href="/quan/answers/73">answer</a> posted by '),
(107, 0, 74, 'trishita_cse59_2011', 'rishi_cse36_2010', '<b>trishita_cse59_2011</b> has voted up an <a href="/quan/answers/74">answer</a> posted by '),
(108, 0, 66, 'trishita_cse59_2011', 'tanay_cse57_2011', '<b>trishita_cse59_2011</b> has voted up an <a href="/quan/answers/66">answer</a> posted by '),
(109, 0, 68, 'ashish_cse12_2011', 'rishi_cse36_2010', '<b>ashish_cse12_2011</b> has voted up an <a href="/quan/answers/68">answer</a> posted by '),
(110, 0, 72, 'ashish_cse12_2011', 'sudipta_it13_2010', '<b>ashish_cse12_2011</b> has voted up an <a href="/quan/answers/72">answer</a> posted by '),
(111, 0, 65, 'ashish_cse12_2011', 'tanay_cse57_2011', '<b>ashish_cse12_2011</b> has voted up an <a href="/quan/answers/65">answer</a> posted by '),
(113, 29, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/29">Question</a></b>'),
(114, 29, 0, 'sudipta_it13_2010', 'Anonymus durgesh_cse16_2010', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/79">answered</a> a <b><a href="/quan/question/29">Question</a></b> '),
(115, 26, 0, 'trishita_cse59_2011', 'Anonymus rishi_cse36_2010', '<b>trishita_cse59_2011</b> has <a href="/quan/answers/80">answered</a> a <b><a href="/quan/question/26">Question</a></b> '),
(116, 0, 79, 'trishita_cse59_2011', 'sudipta_it13_2010', '<b>trishita_cse59_2011</b> has voted up an <a href="/quan/answers/79">answer</a> posted by '),
(117, 0, 80, 'sudipta_it13_2010', 'trishita_cse59_2011', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/80">answer</a> posted by '),
(118, 0, 79, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/Quan/answers/79">answer</a> posted by '),
(119, 29, 0, 'trishita_cse59_2011', 'Anonymus durgesh_cse16_2010', '<b>trishita_cse59_2011</b> has <a href="/quan/answers/81">answered</a> a <b><a href="/quan/question/29">Question</a></b> '),
(120, 0, 81, 'sudipta_it13_2010', 'trishita_cse59_2011', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/81">answer</a> posted by '),
(122, 0, 0, 'sukanya_it04_2010', '', '<b>sukanya_it04_2010</b> is now on Quan'),
(123, 0, 79, 'rishi_cse36_2010', 'sudipta_it13_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/79">answer</a> posted by '),
(124, 29, 0, 'rishi_cse36_2010', 'Anonymus durgesh_cse16_2010', '<b>rishi_cse36_2010</b> has <a href="/quan/answers/82">answered</a> a <b><a href="/quan/question/29">Question</a></b> '),
(125, 0, 81, 'rishi_cse36_2010', 'trishita_cse59_2011', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/81">answer</a> posted by '),
(126, 0, 80, 'rishi_cse36_2010', 'trishita_cse59_2011', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/80">answer</a> posted by '),
(127, 30, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/30">Question</a></b>'),
(128, 0, 82, 'trishita_cse59_2011', 'rishi_cse36_2010', '<b>trishita_cse59_2011</b> has voted up an <a href="/Quan/answers/82">answer</a> posted by '),
(129, 0, 0, 'swarna_cse55_2011', '', '<b>swarna_cse55_2011</b> is now on Quan'),
(130, 0, 82, 'sudipta_it13_2010', 'rishi_cse36_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/82">answer</a> posted by '),
(131, 0, 79, 'vikram_cse60_2010', 'sudipta_it13_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/79">answer</a> posted by '),
(132, 0, 0, 'soudip_ece102_2011', '', '<b>soudip_ece102_2011</b> is now on Quan'),
(133, 0, 0, 'ishita_it11_2010', '', '<b>ishita_it11_2010</b> is now on Quan'),
(134, 0, 79, 'durgesh_cse16_2010', 'sudipta_it13_2010', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/79">answer</a> posted by '),
(135, 0, 82, 'durgesh_cse16_2010', 'rishi_cse36_2010', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/82">answer</a> posted by '),
(136, 0, 82, 'swarna_cse55_2011', 'rishi_cse36_2010', '<b>swarna_cse55_2011</b> has voted up an <a href="/quan/answers/82">answer</a> posted by '),
(137, 0, 0, 'prachi_it02_2010', '', '<b>prachi_it02_2010</b> is now on Quan'),
(138, 0, 0, 'sohoum_it10_2010', '', '<b>sohoum_it10_2010</b> is now on Quan'),
(139, 0, 0, 'nityananda_ece80_2010', '', '<b>nityananda_ece80_2010</b> is now on Quan'),
(140, 0, 81, 'durgesh_cse16_2010', 'trishita_cse59_2011', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/81">answer</a> posted by '),
(141, 0, 81, 'durgesh_cse16_2010', 'trishita_cse59_2011', '<b>durgesh_cse16_2010</b> has voted up an <a href="/quan/answers/81">answer</a> posted by '),
(142, 0, 0, 'prabhat_ece45_2010', '', '<b>prabhat_ece45_2010</b> is now on Quan'),
(143, 0, 62, 'prabhat_ece45_2010', 'md.danish_it28_2010', '<b>prabhat_ece45_2010</b> has voted up an <a href="/quan/answers/62">answer</a> posted by '),
(144, 29, 0, 'durgesh_cse16_2010', 'Anonymus durgesh_cse16_2010', '<b>durgesh_cse16_2010</b> has <a href="/quan/answers/83">answered</a> a <b><a href="/quan/question/29">Question</a></b> '),
(145, 0, 0, 'shreya_it07_2010', '', '<b>shreya_it07_2010</b> is now on Quan'),
(146, 0, 79, 'md.danish_it28_2010', 'sudipta_it13_2010', '<b>md.danish_it28_2010</b> has voted up an <a href="/quan/answers/79">answer</a> posted by '),
(147, 0, 79, 'sudipta_it13_2010', 'sudipta_it13_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/79">answer</a> posted by '),
(148, 30, 0, 'md.danish_it28_2010', 'Anonymus rishi_cse36_2010', '<b>md.danish_it28_2010</b> has <a href="/quan/answers/84">answered</a> a <b><a href="/quan/question/30">Question</a></b> '),
(149, 30, 0, 'md.danish_it28_2010', 'Anonymus rishi_cse36_2010', '<b>md.danish_it28_2010</b> has <a href="/quan/answers/85">answered</a> a <b><a href="/quan/question/30">Question</a></b> '),
(150, 27, 0, 'md.danish_it28_2010', 'Anonymus dipayan_it32_2010', '<b>md.danish_it28_2010</b> has <a href="/quan/answers/86">answered</a> a <b><a href="/quan/question/27">Question</a></b> '),
(151, 0, 85, 'md.danish_it28_2010', 'md.danish_it28_2010', '<b>md.danish_it28_2010</b> has voted up an <a href="/quan/answers/85">answer</a> posted by '),
(152, 0, 85, 'sudipta_it13_2010', 'md.danish_it28_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/85">answer</a> posted by '),
(153, 0, 85, 'rishi_cse36_2010', 'md.danish_it28_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/85">answer</a> posted by '),
(154, 0, 62, 'rishi_cse36_2010', 'md.danish_it28_2010', '<b>rishi_cse36_2010</b> has voted up an <a href="/quan/answers/62">answer</a> posted by '),
(157, 0, 65, 'abhay_cse01_2011', 'tanay_cse57_2011', '<b>abhay_cse01_2011</b> has voted up an <a href="/quan/answers/65">answer</a> posted by '),
(156, 0, 0, 'abhay_cse01_2011', '', '<b>abhay_cse01_2011</b> is now on Quan'),
(158, 31, 0, 'Anonymus User', '', '<b>Anonymus User</b> has added a new <b><a href="/quan/question/31">Question</a></b>'),
(159, 0, 0, 'rahul_cse33_2010', '', '<b>rahul_cse33_2010</b> is now on Quan'),
(160, 0, 85, 'vikram_cse60_2010', 'md.danish_it28_2010', '<b>vikram_cse60_2010</b> has voted up an <a href="/quan/answers/85">answer</a> posted by '),
(161, 0, 85, 'sudipta_it13_2010', 'md.danish_it28_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/85">answer</a> posted by '),
(162, 0, 85, 'sudipta_it13_2010', 'md.danish_it28_2010', '<b>sudipta_it13_2010</b> has voted up an <a href="/quan/answers/85">answer</a> posted by '),
(163, 0, 0, 'sayantan_cse42_2011', '', '<b>sayantan_cse42_2011</b> is now on Quan'),
(164, 0, 0, 'amit_ece35_2010', '', '<b>amit_ece35_2010</b> is now on Quan'),
(165, 31, 0, 'sudipta_it13_2010', 'Anonymus abhay_cse01_2011', '<b>sudipta_it13_2010</b> has <a href="/quan/answers/87">answered</a> a <b><a href="/quan/question/31">Question</a></b> ');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(4) NOT NULL AUTO_INCREMENT,
  `q_body` text NOT NULL,
  `q_desc` text NOT NULL,
  `add_time` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `q_body`, `q_desc`, `add_time`, `last_update`, `user_id`) VALUES
(8, 'What are the problems in students of NITMAS?', '<p>Give your awesome opinions! :P</p>\r\n', '2013-05-06 00:00:00', '2013-05-06 00:00:00', 'rishi_cse36_2010'),
(13, 'Why people of NITMAS are scared of programming? What are some best approach to learn programming fast?', '<p>This question is basically for most of our college students, specially students belong to IT and CSE, who are afraid of programming, also knowing the need of it? We can have a disscussion here on why they are scared of programming, and what can help them to get rid of this and make themselves a standard programmers. I expect good answers from you guys.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt="" src="http://www.learningsolutionsmag.com/images/articles/main/id_27_608.jpg" style="height: 200px; width: 608px; border-width: 2px; border-style: solid;" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2013-05-06 10:05:35', '2013-05-06 22:06:04', 'sudipta_it13_2010'),
(21, 'Why people are so inactive here?', '<h4>&nbsp;</h4>\r\n\r\n<p>I see there are 28 people registered in this blog, still two questions with few answers. I agree this is not yet so attractive, but still I expect some good response from you people.</p>\r\n\r\n<p><strong>Use this blog to enhance your knowledge and spread it alongside to gain more and more. </strong></p>\r\n', '2013-05-06 21:33:33', '0000-00-00 00:00:00', 'Anonymus sudipta_it13_2010'),
(22, 'What are the things you should definitely do before you leave NITMAS?', '<p>:)</p>\r\n', '2013-05-07 12:26:10', '2013-05-07 12:27:57', 'vikram_cse60_2010'),
(23, 'Why is the senior-junior relationship in this college so formal and awkward? ', '<p>The senior-junior relationship</p>\r\n', '2013-05-07 14:05:02', '0000-00-00 00:00:00', 'Anonymus trishita_cse59_2011'),
(24, 'Who is the most helpful person you have ever met in NITMAS ?', '<h4>That person must be someone <strong>belongs to the set of Teachers or Management people</strong>, none of the students.</h4>\r\n', '2013-05-08 09:53:47', '0000-00-00 00:00:00', 'sudipta_it13_2010'),
(25, 'What are the good thing you get from NITMAS faculty?', '<p>Answer <span style="color: rgb(34, 34, 34); font-family: arial; font-size: small; line-height: normal;">honestly&nbsp;</span>if you get anything...&nbsp;</p>\r\n', '2013-05-08 13:37:00', '0000-00-00 00:00:00', 'Anonymus vikram_cse60_2010'),
(26, 'What are some awesome places in Kolkata to go for a date?', '<p>Lets make a list for fellow NITMASians.</p>\r\n', '2013-05-09 00:19:36', '0000-00-00 00:00:00', 'Anonymus rishi_cse36_2010'),
(27, 'What will be the best for me php training or java training?', '<p>In the summer I&nbsp;have to do a training....so what will be benifitial for me?</p>\r\n', '2013-05-09 18:49:09', '0000-00-00 00:00:00', 'Anonymus dipayan_it32_2010'),
(28, 'Hello Admin', '<p>&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;one problem we want to change our Answer but gives the error.</p>\r\n', '2013-05-10 15:44:27', '0000-00-00 00:00:00', 'Anonymus durgesh_cse16_2010'),
(29, 'How to improve english spoken.', '<p>My english spoken is weak i try to speek in english but my are friends are jokeing. what did i&nbsp;do.</p>\r\n', '2013-05-10 22:55:31', '2013-05-12 12:12:33', 'Anonymus durgesh_cse16_2010'),
(30, 'Why do students at NITMAS run after their CGPA?', '<p>I am confused about this. Many are studying hard to get good GPA, though there hasn&#39;t been any case till now by any pass-out who got an awesome job just because of his/her CGPA? So, are they studying blindlessly without any real understanding of the scenario? Why don&#39;t they study what a company actually wants?</p>\r\n', '2013-05-11 02:28:29', '0000-00-00 00:00:00', 'Anonymus rishi_cse36_2010'),
(31, 'Who do you respect the most in NITMAS? Why?', '<p>People who are in NITMAS currently. Maybe a faculty, or a student.</p>\r\n', '2013-05-16 19:25:11', '0000-00-00 00:00:00', 'Anonymus abhay_cse01_2011');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `roll` int(3) NOT NULL,
  `score` int(10) DEFAULT NULL,
  `last_not` int(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `email_id`, `username`, `password`, `batch`, `stream`, `roll`, `score`, `last_not`) VALUES
(1, 'Sudipta', 'Sen', 'sanborn.sen@gmail.com', 'sudipta_it13_2010', '2fe064d797a60eca105ee44cfe9f9b06', '2010-2014', 'IT', 31, NULL, 164),
(3, 'Indradhanush', 'Gupta', 'indradhanushgupta@gmail.com', 'indradhanush_it29_2010', 'a808737d05dd22c339f32f9883351327', '2010-2014', 'IT', 7, NULL, 95),
(4, 'Durgesh', 'Singh', '', 'durgesh_cse16_2010', '9458d6f18545d1f1a9f26262df8cf513', '2010-2014', 'CSE', 3, NULL, 158),
(6, 'Aniket', 'Chakraborty', '', 'aniket_it15_2010', 'd5bd962bd3920011f853a385069a66a9', '2010-2014', 'I.T.', 28, NULL, 0),
(10, 'vikram', 'raj', '', 'vikram_cse60_2010', 'e206a54e97690cce50cc872dd70ee896', '2010-2014', 'CSE', 35, NULL, 165),
(12, 'Rishi(Papa)', 'Mukherjee', '', 'rishi_cse36_2010', 'b43ff3482a15bb149cd0e8009745e499', '2010-2014', 'CSE', 7, NULL, 152),
(14, 'danish', 'ansari', 'danish.saba@gmail.com', 'md.danish_it28_2010', '2d9ca81504a2be2c636b4cdfb097f40a', '2010-2014', 'IT', 33, NULL, 163),
(17, 'Vikash', 'kumar', '', 'vikash', 'c41d21cc809911b7474d58a27ec8298b', '2010-2014', 'ECE', 64, NULL, 0),
(18, 'kumar', 'shivam', '', 'kumar_cse21_2010', 'e10adc3949ba59abbe56e057f20f883e', '2010-2014', 'CSE', 52, NULL, 0),
(29, 'Tanay', 'Bera', 'ootanayoo@gmail.com', 'tanay_cse57_2011', '2be99c1f96b839e138d9a6fbce3dc6ff', '2011-2015', 'CSE', 57, NULL, 0),
(26, 'Mani Shankar', 'Jha', 'manidrockstar1992@gmail.com', 'mani_ece50_2011', '1928b729ed43b999a968a0bcbcad91e9', '2011-2015', 'ECE', 50, NULL, 0),
(27, 'Manoj', 'Kumar', 'manojkr.1989cp@gmail.com', 'manoj_ece96_2010', 'd97585a55b9ce528853ac0d05314a7e2', '2010-2014', 'ECE', 71, NULL, 0),
(28, 'neeraj', 'kumar', 'kumarneeraj348@gmail.com', 'neeraj_ece25_2010', '0746527ed42576777b0259f2dfaccd75', '2010-2014', 'ECE', 55, NULL, 0),
(30, 'Aditya', 'Bose', 'adibs905@gmail.com', 'aditya_it22_2010', '6eec7d0e3eb02cd9a34dda96a50bb02d', '2010-2014', 'IT', 19, NULL, 96),
(31, 'Shantam', 'Das', 'd2.shantam@gmail.com', 'Shantam_cse43_2011', '25d55ad283aa400af464c76d713c07ad', '2011-2015', 'CSE', 48, NULL, 0),
(32, 'Rakesh', 'Sona', 'rakeshsona71@gmail.com', 'rakesh_cse60_2011', 'c61f2c527987f9a1cfcbac9a560a2f39', '2011-2015', 'CSE', 40, NULL, 0),
(33, 'Abhishek', 'Banerjee', 'abhishekbanerjee1992@gmail.com', 'abhishek_cse03_2011', '48ab127d7431bf7b950f5b9f6d114de5', '2011-2015', 'CSE', 3, NULL, 0),
(34, 'Pravind', 'Kumar', 'pravind.india@gmail.com', 'pravind_cse28_2010', '6c6e46555bfa0cd2d0e2e0f81c59c054', '2010-2014', 'CSE', 28, NULL, 162),
(35, 'Astha', 'Priyadarshini', 'astha.priyadarshini@gmail.com', 'astha_bt02_2010', 'd93e93818d21dcdaa29fcb1a5a54a397', '2010-2014', 'BT', 13, NULL, 0),
(37, 'Test', 'User', 'testuser@quan.com', 'TestUser', '2fe064d797a60eca105ee44cfe9f9b06', '2010-2014', 'IT', 23, NULL, 165),
(39, 'Sanborn', 'Sen', 'sudipta_sen@india.com', 'sanborn_it13_2010(test user)', '2fe064d797a60eca105ee44cfe9f9b06', '2010-2014', 'IT', 31, NULL, 152),
(40, 'Shatanik', 'Biswas', 'shatanikbiswas@gmail.com', 'shatanik_bt09_2010', '82482e6d4b367c8bacb569dbaab76cab', '2010-2014', 'BT', 14, NULL, 0),
(41, 'Dipayan', 'Das', 'iluvny.999abhi@gmail.com', 'dipayan_it32_2010', '25f9e794323b453885f5181f1b624d0b', '2010-2014', 'IT', 14, NULL, 0),
(42, 'Amit', 'Tiwari', 'amiit111tiwari@gmail.com', 'amit_cse04_2010', '119abaeb47e8872a8e9e42612fe7637f', '2010-2014', 'CSE', 40, NULL, 0),
(43, 'Parin', 'Shah', 'parinshah16@gmail.com', 'parin_it16_2010', 'e4c1fe7fca07b655a2e8ac9dbf48a168', '2010-2014', 'IT', 34, NULL, 122),
(44, 'Srotoswini', 'Bose', 'tritam250@gmail.com', 'srotoswini_it01_2010', '7450bfacc5a3cbe5aaeb5ff9d2ffcf78', '2010-2014', 'IT', 16, NULL, 0),
(45, 'Trishita', 'Chakraborty', 'trishita.c@rediffmail.com', 'trishita_cse59_2011', '4412b80647ba9c354f394ba0e18bf138', '2011-2015', 'CSE', 59, NULL, 162),
(46, 'Rohan', 'Verma', 'rohan8585@gmail.com', 'rohan_it32_2010', '81dc9bdb52d04dc20036dbd8313ed055', '2010-2014', 'IT', 29, NULL, 0),
(47, 'Rahul', 'Prasad', 'rahul.indy@gmail.com', 'rahul_it36_2011', '7b2ab8838a04f97b8cc61620cde65dc8', '2011-2015', 'IT', 36, NULL, 0),
(48, 'Prama', 'Das', 'prama.niit@gmail.com', 'prama_bt12_2011', 'fafa6d3e5eafae51049bd394e134c0bf', '2011-2015', 'BT', 12, NULL, 0),
(49, 'Indranil', 'Nandy', 'indranilnandy90@gmail.com', 'indranil_cse20_2011', '39d6bff40ffe5a62a035573c0ba1772a', '2011-2015', 'CSE', 22, NULL, 87),
(50, 'Ashish', 'Singh', 'imrealashu@gmail.com', 'ashish_cse12_2011', '66e478245b211e7f6f3171d425ba5b51', '2011-2015', 'CSE', 12, NULL, 163),
(51, 'Swarnali', 'Saha', 'saha.jhiliksaha@gmail.com', 'swarnali_bt14_2010', 'd598a336fcfba0a3b2441d51df4fdfab', '2010-2014', 'BT', 2147483647, NULL, 0),
(52, 'Rahul', 'Singh', 'rahulrsingh09@gmail.com', 'rahul_it19_2010', '7951353ceae0270d871a68fe68a22346', '2010-2014', 'IT', 17, NULL, 108),
(53, 'purvi', 'thakkar', 'me.purvithakkar@gmail.com', 'purvi_cse32_2010', '1d7b217127d82ea1eac7e3b92090a463', '2010-2014', 'CSE', 43, NULL, 0),
(54, 'sweta', 'choudhary', 'calcutta.s@gmail.com', 'sweta_cse10_2010', 'c7c14e9e387b8299af6d1a107a1809bb', '2010-2014', 'CSE', 10, NULL, 0),
(55, 'Rupesh', 'Singh', 'im.singh.rupesh@gmail.com', 'rupesh_cse37_2010', 'fcea920f7412b5da7be0cf42b8c93759', '2010-2014', 'CSE', 17, NULL, 88),
(57, 'Sukanya', 'Bhattacharya', 'sukanya.0910@gmail.com', 'sukanya_it04_2010', 'aebd40bb96d589f2a734184037f863fa', '2010-2014', 'IT', 23, NULL, 0),
(58, 'Swarna', 'Debroy', 'kaushik06101992@gmail.com', 'swarna_cse55_2011', '1bf8fcb0a2dd77e48780712c559ab64f', '2011-2015', 'CSE', 55, NULL, 135),
(59, 'Soudip', 'Bhattacharya', 'soudip@aol.in', 'soudip_ece102_2011', '81dc9bdb52d04dc20036dbd8313ed055', '2011-2015', 'ECE', 102, NULL, 131),
(60, 'Ishita', 'Mazumdar', 'ish.mazumdar@gmail.com', 'ishita_it11_2010', '93e6de0b0e846bb48b5d8415032a7b23', '2010-2014', 'IT', 2147483647, NULL, 0),
(61, 'Prachi', 'Narayan', 'coolprachi13@gmail.com', 'prachi_it02_2010', '0bb0e0a272cd22a0b7f1aff99661ebcf', '2010-2014', 'IT', 2, NULL, 136),
(62, 'sohoum', 'rakshit', 'rakshitsohoum@gmail.com', 'sohoum_it10_2010', 'b78bb582523a89da07ce348eb5e16d88', '2010-2014', 'IT', 10, NULL, 137),
(63, 'Nityananda ', 'Jana', 'poojajana12@gmail.com', 'nityananda_ece80_2010', '81dc9bdb52d04dc20036dbd8313ed055', '2010-2014', 'ECE', 54, NULL, 138),
(64, 'prabhat', 'kumar', 'kumarprabhat41@yahoo.in', 'prabhat_ece45_2010', '4043564f27c8f618004cee28c0a92cf2', '2010-2014', 'ECE', 67, NULL, 141),
(65, 'shreya', 'Banerjee', 'shreyabony@gmail.com', 'shreya_it07_2010', 'af77cd90d3a451d493cb5d1734e55b6f', '2010-2014', 'IT', 3, NULL, 144),
(68, 'Rahul', 'Basak', 'rahul_basak_2007@yahoo.co.in', 'rahul_cse33_2010', '0e3138596e67caf5e5ec7d650aeabf42', '2010-2014', 'CSE', 30, NULL, 158),
(67, 'Abhay', 'Mangal', 'abhay2611@gmail.com', 'abhay_cse01_2011', 'fbb3e63a1a2f7b6af0956e030ca9a125', '2011-2015', 'CSE', 1, NULL, 159),
(69, 'Sayantan', 'Das', 'sayantann.das@gmail.com', 'sayantan_cse42_2011', '9ba97c839cc22f2d6cbf31ea3f42ac01', '2011-2015', 'CSE', 47, NULL, 0),
(70, 'amit ', 'das', 'amitdashboard13@gmail.com', 'amit_ece35_2010', '827ccb0eea8a706c4c34a16891f84e7b', '2010-2014', 'ECE', 4, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
