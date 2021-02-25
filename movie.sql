-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 12:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movieuserdata`
--

CREATE TABLE `movieuserdata` (
  `username` varchar(30) NOT NULL,
  `movie` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieuserdata`
--

INSERT INTO `movieuserdata` (`username`, `movie`) VALUES
('Pavanjain1996', 'Parmanu'),
('Pavanjain1996', 'Dhadak'),
('Pavanjain1996', 'Raazi'),
('Pavanjain1996', 'Race 3'),
('Pavanjain1996', 'October'),
('ritikjain123', 'Sanju'),
('ritikjain123', 'Veerey Di Wedding'),
('ritikjain123', 'Soorma'),
('ritikjain123', 'Baaghi 2'),
('ritikjain123', 'Raid'),
('Aryangupta', 'PK');

-- --------------------------------------------------------

--
-- Table structure for table `review_aryangupta`
--

CREATE TABLE `review_aryangupta` (
  `movie` varchar(100) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `starcast` varchar(200) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `story` varchar(10000) DEFAULT NULL,
  `review` varchar(10000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_aryangupta`
--

INSERT INTO `review_aryangupta` (`movie`, `type`, `language`, `starcast`, `rating`, `story`, `review`) VALUES
('PK', 'Drama', 'Hindi', 'Aamir Khaan', 4, 'It was a movie about an alien came from space to earth.', 'It was a good movie.');

-- --------------------------------------------------------

--
-- Table structure for table `review_pavanjain1996`
--

CREATE TABLE `review_pavanjain1996` (
  `movie` varchar(100) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `starcast` varchar(200) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `story` varchar(10000) DEFAULT NULL,
  `review` varchar(10000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_pavanjain1996`
--

INSERT INTO `review_pavanjain1996` (`movie`, `type`, `language`, `starcast`, `rating`, `story`, `review`) VALUES
('Parmanu', 'Action', 'Hindi', 'John Abrahim', 3.5, 'In 1995, Ashwath Raina (John Abraham) an IAS officer, suggests that India conduct its own set of nuclear tests to stay ahead in the nuclear race with China and Pakistan. After the initial test fails under pressure from America, Raina gets a second chance in 1998 under the new reign of then PM Atal Bihari Vajpayee.', ' â€˜Parmanu: The Story Of Pokhranâ€™ is exactly what the title suggests. Itâ€™s a part fiction, part fact build up to the Pokhran II tests in 1998, after which India was recognised as a nuclear power on the global stage. While it is inspired by this real-life event, itâ€™s story doesnâ€™t follow Indiaâ€™s nuclear program to the T. It takes a few, cinematic liberties, in the way our scientific community and armed forces beat the American intelligence and surveillance systems to successfully test three nuclear bombs in the desert of Pokhran, Rajasthan. It is not an authentic recreation of history, but â€˜Parmanuâ€™ is a fairly entertaining look at a story that evokes the right sense of patriotism and national pride without being jingoistic.'),
('Dhadak', 'Romantic', 'Hindi', 'Ishaan and Jahnvi', 2.5, 'Madhukar (Ishaan) and Parthavi (Janhvi) fall head over heels in love with each other, but the fact that they belong to different castes of society, becomes an obstacle in their romance. The lovers dare to go against societal norms and battle all odds for the sake of love.', 'The strength of Dhadak lies in its brimming freshness and innocence. That this film presents the new faces of Ishaan (one film old) and Janhvi (who marks her debut in Bollywood) works in the favour of its narrative. Like its original inspiration, Nagraj Manjuleâ€™s Sairat, the facet of love trying to survive the cruel world of politics and ruthless societal pressure, makes Dhadak engaging. The film follows the Sairat template for most part, but what is lacks is the grit and detailing of Manjuleâ€™s original.'),
('Raazi', 'Romantic', 'Hindi', 'Alia Bhatt and Vicky Kausal', 3.5, 'Set against the backdrop of the Indo-Pak war in 1971, an Indian girl marries a Pakistani Army officer to spy for her country.', 'â€˜Raaziâ€™ is the true story of a Muslim girl Sehmat (Alia Bhatt) - a naÃ¯ve and inexperienced Kashmiri whose life changes when her father Hidayat Khan (Rajit Kapoor) seals her fate as an Indian spy. She undergoes rigorous training under Indian intelligence agent Khalid Mir (Jaideep Ahlawat) before being married off to Pakistani Army officer Iqbal Syed. On the other side of the border, Sehmat gradually assimilates into Iqbalâ€™s family to uncover vital information while keeping her real motives hidden from them.'),
('Race 3', 'Action', 'Hindi', 'Anil Kapoor, Salman Khan and Jacquiline Fernandes', 2, 'The Singh family comprises of Shamsher (Anil Kapoor) his step-son Sikandar (Salman Khan), twins Suraj (Saqib Saleem) and Sanjana (Daisy Shah). They run a business of illegal arms and trade with the help of their friend Yash (Bobby Deol). Things get dramatic when Jessica (Jacqueline Fernandez) meets Sikandar and the family ties are strained under each characterâ€™s ulterior motives.', 'The Race franchise is known for its excessively stylized characters and high-octane action. These films showcase expensive cars and fancy set pieces, they have everything to please the an action movie buff and James Bond fans. â€˜Race 3â€™ puts the pedal to the metal when it comes to making stylish statements. But as it zooms ahead in style, the substance is left behind in a cloud of dust.\r\n\r\nThis film is about a rich family dealing with a lot of double crossing and scheming, as youâ€™d expect from a film of this franchise. The Singh family is executing a high stake heist, where they have to steal a hard disk from a bank, so the setup looks like it''s going to have a lot of thrills and action. But the generous dose of action never translates into any serious thrills because the story is so flimsy. To say that the film has a wafer thin plot is an understatement. Unlike the action, the script lacks any real punch as the story does not engage the viewer at all. Trailer of the film had sparked off a bevy of memes on social media and when you watch the film you realise there are more such dialogues like, â€˜Our business is our business, none of your businessâ€™ and that makes you wonder what the writers were thinking.\r\n'),
('October', 'Romantic', 'Hindi', 'Varun Dhawan and Banita Sandhu', 3.5, 'Dan (Varun Dhawan), a student of hotel management is an intern at a top hotel in Delhi along with his batch mates. An incident occurs at the hotel where one of his colleagues Shiuli (Banita Sandhu), lands up at the hospital. This affects Dan far deeply than he ever imagined, and thereon, he embarks on an emotional journey where he seeks answers and love in the strangest of circumstances.', 'Shoojit Sircarâ€™s â€˜Octoberâ€™ says a lot, without saying too much. Yes, it is a film about love, seen from Danâ€™s pure and simple world-view and Shuiliâ€™s silent, stoic stares. Itâ€™s not a story crafted with heavy doses of dialogues, romantic ballads or bombastic episodes common to the genre. The beauty lies in the simplicity of it all. Dan is a 21-year-old who still has a lot of growing up to do; heâ€™s clumsy and careless at work, a tad cocky too, but not with an air of arrogance. He doesnâ€™t speak volumes, but heâ€™s blunt and straightforward. Dan expresses himself with a rare innocence that makes him lovable. As colleagues, Shiuli and he share nothing more than a few glances and some casual conversation. After the untoward episode, as she lies in bed, Dan is drawn to her agonizing and motionless world. And something flows and flourishes between them. Something called love, maybe?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `review_ritikjain123`
--

CREATE TABLE `review_ritikjain123` (
  `movie` varchar(100) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `starcast` varchar(200) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `story` varchar(10000) DEFAULT NULL,
  `review` varchar(10000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_ritikjain123`
--

INSERT INTO `review_ritikjain123` (`movie`, `type`, `language`, `starcast`, `rating`, `story`, `review`) VALUES
('Sanju', 'Drama', 'Hindi', 'Ranbir Kapoor and Sonam Kapoor', 4, 'Sanju explores some of the most crucial chapters from movie star Sanjay Duttâ€™s dramatic and controversial real life. It gives a lowdown on his tryst with drugs and his trials and tribulations in the Arms Acts case and the 1993 Mumbai blasts.', 'One man, many lives is just the tip of the iceberg when it comes to Sanjay Dutt. Rajkumar Hiraniâ€™s film presents a vivid and very dramatic look in this biopic of sorts. The film starts off with Sanjay Dutt (Ranbir Kapoor) wanting a writer for his biography even while he''s preparing to surrender himself to the Supreme Court''s judgement in the Arms Act case. A film writer fails him miserably, so Sanju turns to a more established writer Winnie (Anushka Sharma) to pen his biography. His confessions and recollections to Winnie are intimate and give us deep insights into the highs and lows of his life, which is nothing short of a roller-coaster ride. Like any Rajkumar Hirani film, Sanju blends humour with drama effortlessly. While it doesn''t reveal much about the protagonistsâ€™ relationships and marriages, it does tell a strong story of an unbreakable bond between a father, son and a best friend. In fact, Sanjayâ€™s relationship with his father Sunil Dutt (Paresh Rawal) forms the major part of this story and some of the most heart wrenching and touching moments in the film belong to both of them.'),
('Veerey Di Wedding', 'Drama', 'Hindi', 'Kareena Kapoor and Sonam Kapoor', 3, 'Kalindi (Kareena Kapoor Khan), Avni (Sonam Kapoor Ahuja), Sakshi (Swara Bhasker) and Meera (Shikha Talsania) are childhood friends. Kalindi and Rishabh (Sumeet Vyas) are getting married, and the four gal pals come together for their veereâ€™s wedding. But of course, there can be no shaadi without showsha and a lot of drama. This wedding celebration brings out skeletons from the closet, unspoken truths and some harsh realities as well.', 'Four friends dealing with life, love, marriage and heartbreak isnâ€™t an unheard of concept. But what makes â€˜Veere Di Weddingâ€™ a unique prospect is that here the pack of performers, is led by four ladies who make their choices, stand by them and have the guts to live their life the they want. Thereâ€™s nothing holding back these gutsy girls. They speak their mind with fearless abandon, while theyâ€™re talking about sex before marriage, the lack of it post marriage, about orgasms and sex toys. They giggle and laugh over it and analyse their own situations in life with a certain objectivity, which many may or may not agree with. Itâ€™s refreshing to see a film present its women characters, in not just a progressive light, but also with umpteen flaws and cracks. It gives them the freedom to make mistakes and move on and thatâ€™s the beauty of it. These girls are unabashed using cuss words to express their angst or get high and happy to let their hair down. They donâ€™t feel compelled to explain themselves or justify their actions, and that is one of the highlights of the film.'),
('Soorma', 'Drama', 'Hindi', 'Diljit Dosanjh and Taapsee Pannu', 3.5, 'Soorma, a comeback story of the hockey legend Sandeep Singh is a biopic that chronicles the life and times of the famed hockey player.', 'Welcome to Shahabad of 1994 - the hockey capital of India. Itâ€™s a small town that dreams big. A dream to be a part of the Indian hockey team and almost every child (girl or boy) is in the race.\r\n\r\nA young Sandeep Singh (Diljit Dosanjh) is also one of them but his dedication soon wears off, thanks to his unreasonably stern coach. Hockey takes a backseat in his life until his teenage years, when he falls in love with another player Harpreet (Taapsee Pannu). She reignites his passion for the game, and thereon, it becomes his purpose to live.'),
('Baaghi 2', 'Action', 'Hindi', 'Tiger Shroff and Disha Patani', 2.5, 'Neha (Disha Patani) calls for her ex-boyfriend and army man Ranveer (Tiger Shroff) to find her 3-year-old daughter Rhea, who''s been kidnapped 2 months ago. Ranveer aka Ronny has to solve the mystery of the missing child.', 'Baaghi 2 is an all-out action film with suspense and thriller elements. The first half is spent entirely in the setup. A distraught mother reaches out to her ex-boyfriend Ronny for help. But once Ronny starts investigating the case, he finds out that no one has a clue about Nehaâ€™s daughter. The build-up is slow but steady and by interval time the film does manages to pique some interest. Too much time is spent in establishing the story, the suspense and its characters. There are a few action sequences in the first half, but the main focus remains on Nehaâ€™s and Ronnyâ€™s relationship and the way their past affects their present.\r\n\r\nThe second half though is a completely different tale. The slow pace of suspense and the romantic track give way to twists and turns that culminate in a finale that lacks any reasoning or rationale. Ronny goes from the slightly confused soldier to an absolute blood-thirsty nutter with nothing but revenge on his mind. It gives Tiger Shroff the chance to exhibit his martial arts skills. He turns into a desi-version of Rambo as he annihilates an entire army with blazing guns and high flying kicks. It is here, that director Ahmed Khanâ€™s movie trades style for substance.'),
('Raid', 'Action', 'Hindi', 'Ajay Devgan and Illeana D''Cruz', 4, 'An incorruptible IT officer Amay Patnaik (Ajay Devgn) gets an anonymous tip about a political leader Taujiâ€™s (Saurabh Shukla) illegal assets. Patnaik plans an elaborate Raid on Taujiâ€™s home and businesses.', 'A good film is itâ€™s own reward. Raj Kumar Gupta has made an entertaining and impressive film with Raid. Ritesh Shah has written an intelligent script and screenplay one that has interesting characters and dialogue too. Raid is an engrossing film, its moulded in the commercial film format. There are songs, there are twists and thereâ€™s an abundance of thrills. This one has all the trappings of a film youâ€™d want to root for. As the hero fights corruption with utmost honesty, and his team of officers unearth hidden assets with lively enthusiasm, the viewer feels the thrill of seeing gold biscuits and currency notes pop out from walls and other unlikely sources. The music by Amit Trivedi and Tanishk Bagchi doesn''t really fit into the gritty narrative and end up as a distraction from the otherwise taut story. Tracks like ''Sanu Ek Pal'' and ''Nit Khair Manga'' look like they''ve been included just to add to the film''s commercial prospects.');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `category` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `area_interest` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`first_name`, `middle_name`, `last_name`, `username`, `password`, `mobile`, `gender`, `category`, `email`, `area_interest`) VALUES
('Pavan', 'Kumar', 'Jain', 'Pavanjain1996', 'action12@on', '8349312393', 'Male', 'General', '013pavanjain@gmail.com', 'Romantic'),
('Ritik', 'Kumar', 'Jain', 'ritikjain123', 'ritikjain123', '7898513916', 'Male', 'General', 'ritikjain@gmail.com', 'Animation'),
('Aryan', 'Singh', 'Gupta', 'Aryangupta', 'aryan123', '7895642136', 'Male', 'General', 'aryan@gmail.com', 'Action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
