-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 03:24 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ami`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('11beb945337c5e21d4707e9590f16491', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1366341753, 'a:8:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"username";s:7:"student";s:8:"password";s:32:"81dc9bdb52d04dc20036dbd8313ed055";s:11:"displayname";s:7:"Student";s:5:"email";s:20:"racarongoy@yahoo.com";s:10:"permission";s:7:"student";s:12:"is_logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `company_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_location`) VALUES
(1, 'TOSHIBA', NULL),
(2, 'TOTOKU', NULL),
(3, 'SHINETSU', NULL),
(4, 'AMI', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deployment`
--

CREATE TABLE IF NOT EXISTS `deployment` (
  `deployment_id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(45) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `contract_from` date DEFAULT NULL,
  `contract_to` date DEFAULT NULL,
  `staff` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`deployment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE IF NOT EXISTS `examination` (
  `examination_id` int(11) NOT NULL AUTO_INCREMENT,
  `examination_name` varchar(45) DEFAULT NULL,
  `no_of_questions` int(11) DEFAULT NULL,
  `no_of_choices` int(2) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  PRIMARY KEY (`examination_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`examination_id`, `examination_name`, `no_of_questions`, `no_of_choices`, `time`, `date_modified`) VALUES
(27, 'TOSHIBA Examination', 140, 4, NULL, '2013-04-19'),
(28, 'Sample Examination', 10, 4, NULL, '2013-04-19'),
(29, 'TOTOKU Examination', 140, 4, NULL, '2013-04-19'),
(30, 'SHINETSU', 140, 4, NULL, '2013-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `hris`
--

CREATE TABLE IF NOT EXISTS `hris` (
  `register_id` int(11) NOT NULL,
  `trainee_id` varchar(45) NOT NULL,
  `batch_control_no` varchar(45) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `hriscol` varchar(45) DEFAULT NULL,
  `citizenship` varchar(45) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `present_city` varchar(35) DEFAULT NULL,
  `present_state` varchar(35) DEFAULT NULL,
  `provincial_address` varchar(255) DEFAULT NULL,
  `provincial_city` varchar(35) DEFAULT NULL,
  `provincial_state` varchar(35) DEFAULT NULL,
  `mailing_address` varchar(255) DEFAULT NULL,
  `mailing_city` varchar(35) DEFAULT NULL,
  `mailing_state` varchar(35) DEFAULT NULL,
  `civil_status` varchar(15) DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `marriage_place` varchar(255) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `blood_type` varchar(2) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `home_no` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `alternative_no` varchar(45) DEFAULT NULL,
  `sss_no` varchar(15) DEFAULT NULL,
  `tin_no` varchar(12) DEFAULT NULL,
  `philhealth_no` varchar(45) DEFAULT NULL,
  `pagibig_no` varchar(45) DEFAULT NULL,
  `allergy` varchar(45) DEFAULT NULL,
  `tax_status` varchar(20) DEFAULT NULL,
  `passport_no` varchar(45) DEFAULT NULL,
  `passport_issue_date` date DEFAULT NULL,
  `passport_issue_place` varchar(255) DEFAULT NULL,
  `passport_issue_country` varchar(45) DEFAULT NULL,
  `passport_expiration_date` date DEFAULT NULL,
  `license_type` varchar(45) DEFAULT NULL,
  `license_issue_date` date DEFAULT NULL,
  `license_issue_place` varchar(255) DEFAULT NULL,
  `license_expiration_date` date DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_birthdate` date DEFAULT NULL,
  `spouse_occupation` varchar(255) DEFAULT NULL,
  `spouse_contact_no` varchar(45) DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `employer_business` varchar(255) DEFAULT NULL,
  `employer_location` varchar(255) DEFAULT NULL,
  `employer_contact_no` varchar(45) DEFAULT NULL,
  `children_name` varchar(255) DEFAULT NULL,
  `children_birthdate` varchar(255) DEFAULT NULL,
  `children_school_or_work` varchar(255) DEFAULT NULL,
  `dependent_name` varchar(255) DEFAULT NULL,
  `dependent_birthdate` varchar(255) DEFAULT NULL,
  `dependent_releationship` varchar(45) DEFAULT NULL,
  `beneficiary_name` varchar(255) DEFAULT NULL,
  `beneficiary_birthdate` varchar(255) DEFAULT NULL,
  `beneficiary_relationship` varchar(45) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `father_age` int(3) DEFAULT NULL,
  `father_address` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `mother_age` int(3) DEFAULT NULL,
  `mother_address` varchar(255) DEFAULT NULL,
  `parents_address` varchar(255) DEFAULT NULL,
  `parents_contact_no` varchar(15) DEFAULT NULL,
  `skills` varchar(45) DEFAULT NULL,
  `hobbies` varchar(45) DEFAULT NULL,
  `interests` varchar(45) DEFAULT NULL,
  `educational_level` varchar(45) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `education_from` varchar(255) DEFAULT NULL,
  `education_to` varchar(255) DEFAULT NULL,
  `education_course` varchar(45) DEFAULT NULL,
  `honors` varchar(45) DEFAULT NULL,
  `employment_company_name` varchar(255) DEFAULT NULL,
  `employment_location` varchar(255) DEFAULT NULL,
  `employment_position` varchar(45) DEFAULT NULL,
  `employment_from` varchar(45) DEFAULT NULL,
  `employment_to` varchar(45) DEFAULT NULL,
  `employment_reason_leve` varchar(255) DEFAULT NULL,
  `character_name` varchar(255) DEFAULT NULL,
  `character_company` varchar(255) DEFAULT NULL,
  `character_contact_no` varchar(15) DEFAULT NULL,
  `date_accomplished` date DEFAULT NULL,
  `deployment_status` varchar(45) DEFAULT NULL,
  `payment_status` varchar(45) DEFAULT NULL COMMENT 'deployment_status and payment_status field is for reference only\n',
  PRIMARY KEY (`trainee_id`),
  UNIQUE KEY `batch_control_no_UNIQUE` (`batch_control_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(45) DEFAULT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `module_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `company_name`, `module_path`) VALUES
(1, 'Quality Management Systems', 'TOTOKU', NULL),
(2, 'Toshiba History', 'TOSHIBA', NULL),
(4, 'Office 5S', 'AMI', NULL),
(5, 'Values', 'AMI', NULL),
(6, 'Electrostatic Discharge (ESD)', 'TOSHIBA', NULL),
(7, 'Key Result Area', 'AMI', NULL),
(8, 'Equipment', 'AMI', NULL),
(9, 'Environmental Health and Safety (EHS)', 'AMI', NULL),
(11, 'ISO140001 (EMS)', 'TOTOKU', NULL),
(13, 'Company Rules', 'SHINETSU', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(1000) DEFAULT NULL,
  `answers` varchar(1000) DEFAULT NULL,
  `correct_answer` int(2) DEFAULT NULL,
  `examination_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=681 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `questions`, `answers`, `correct_answer`, `examination_id`) VALUES
(251, '', '*********', NULL, 27),
(252, '', '*********', NULL, 27),
(253, '', '*********', NULL, 27),
(254, '', '*********', NULL, 27),
(255, '', '*********', NULL, 27),
(256, '', '*********', NULL, 27),
(257, '', '*********', NULL, 27),
(258, '', '*********', NULL, 27),
(259, '', '*********', NULL, 27),
(260, '', '*********', NULL, 27),
(261, '', '*********', NULL, 27),
(262, '', '*********', NULL, 27),
(263, '', '*********', NULL, 27),
(264, '', '*********', NULL, 27),
(265, '', '*********', NULL, 27),
(266, '', '*********', NULL, 27),
(267, '', '*********', NULL, 27),
(268, '', '*********', NULL, 27),
(269, '', '*********', NULL, 27),
(270, '', '*********', NULL, 27),
(271, '', '*********', NULL, 27),
(272, '', '*********', NULL, 27),
(273, '', '*********', NULL, 27),
(274, '', '*********', NULL, 27),
(275, '', '*********', NULL, 27),
(276, '', '*********', NULL, 27),
(277, '', '*********', NULL, 27),
(278, '', '*********', NULL, 27),
(279, '', '*********', NULL, 27),
(280, '', '*********', NULL, 27),
(281, '', '*********', NULL, 27),
(282, '', '*********', NULL, 27),
(283, '', '*********', NULL, 27),
(284, '', '*********', NULL, 27),
(285, '', '*********', NULL, 27),
(286, '', '*********', NULL, 27),
(287, '', '*********', NULL, 27),
(288, '', '*********', NULL, 27),
(289, '', '*********', NULL, 27),
(290, '', '*********', NULL, 27),
(291, '', '*********', NULL, 27),
(292, '', '*********', NULL, 27),
(293, '', '*********', NULL, 27),
(294, '', '*********', NULL, 27),
(295, '', '*********', NULL, 27),
(296, '', '*********', NULL, 27),
(297, '', '*********', NULL, 27),
(298, '', '*********', NULL, 27),
(299, '', '*********', NULL, 27),
(300, '', '*********', NULL, 27),
(301, '', '*********', NULL, 27),
(302, '', '*********', NULL, 27),
(303, '', '*********', NULL, 27),
(304, '', '*********', NULL, 27),
(305, '', '*********', NULL, 27),
(306, '', '*********', NULL, 27),
(307, '', '*********', NULL, 27),
(308, '', '*********', NULL, 27),
(309, '', '*********', NULL, 27),
(310, '', '*********', NULL, 27),
(311, '', '*********', NULL, 27),
(312, '', '*********', NULL, 27),
(313, '', '*********', NULL, 27),
(314, '', '*********', NULL, 27),
(315, '', '*********', NULL, 27),
(316, '', '*********', NULL, 27),
(317, '', '*********', NULL, 27),
(318, '', '*********', NULL, 27),
(319, '', '*********', NULL, 27),
(320, '', '*********', NULL, 27),
(321, '', '*********', NULL, 27),
(322, '', '*********', NULL, 27),
(323, '', '*********', NULL, 27),
(324, '', '*********', NULL, 27),
(325, '', '*********', NULL, 27),
(326, '', '*********', NULL, 27),
(327, '', '*********', NULL, 27),
(328, '', '*********', NULL, 27),
(329, '', '*********', NULL, 27),
(330, '', '*********', NULL, 27),
(331, '', '*********', NULL, 27),
(332, '', '*********', NULL, 27),
(333, '', '*********', NULL, 27),
(334, '', '*********', NULL, 27),
(335, '', '*********', NULL, 27),
(336, '', '*********', NULL, 27),
(337, '', '*********', NULL, 27),
(338, '', '*********', NULL, 27),
(339, '', '*********', NULL, 27),
(340, '', '*********', NULL, 27),
(341, '', '*********', NULL, 27),
(342, '', '*********', NULL, 27),
(343, '', '*********', NULL, 27),
(344, '', '*********', NULL, 27),
(345, '', '*********', NULL, 27),
(346, '', '*********', NULL, 27),
(347, '', '*********', NULL, 27),
(348, '', '*********', NULL, 27),
(349, '', '*********', NULL, 27),
(350, '', '*********', NULL, 27),
(351, '', '*********', NULL, 27),
(352, '', '*********', NULL, 27),
(353, '', '*********', NULL, 27),
(354, '', '*********', NULL, 27),
(355, '', '*********', NULL, 27),
(356, '', '*********', NULL, 27),
(357, '', '*********', NULL, 27),
(358, '', '*********', NULL, 27),
(359, '', '*********', NULL, 27),
(360, '', '*********', NULL, 27),
(361, '', '*********', NULL, 27),
(362, '', '*********', NULL, 27),
(363, '', '*********', NULL, 27),
(364, '', '*********', NULL, 27),
(365, '', '*********', NULL, 27),
(366, '', '*********', NULL, 27),
(367, '', '*********', NULL, 27),
(368, '', '*********', NULL, 27),
(369, '', '*********', NULL, 27),
(370, '', '*********', NULL, 27),
(371, '', '*********', NULL, 27),
(372, '', '*********', NULL, 27),
(373, '', '*********', NULL, 27),
(374, '', '*********', NULL, 27),
(375, '', '*********', NULL, 27),
(376, '', '*********', NULL, 27),
(377, '', '*********', NULL, 27),
(378, '', '*********', NULL, 27),
(379, '', '*********', NULL, 27),
(380, '', '*********', NULL, 27),
(381, '', '*********', NULL, 27),
(382, '', '*********', NULL, 27),
(383, '', '*********', NULL, 27),
(384, '', '*********', NULL, 27),
(385, '', '*********', NULL, 27),
(386, '', '*********', NULL, 27),
(387, '', '*********', NULL, 27),
(388, '', '*********', NULL, 27),
(389, '', '*********', NULL, 27),
(390, '', '*********', NULL, 27),
(391, 'Mark all correct answers. You can prepare effectively for a multiple choice exam by', 'taking a Learning Skills course to learn to identify levels of learning required by your tests, and then applying appropriate study strategies*joining a study group so you can practice composing multiple choice questions and answering questions that other people have composed*analyzing old exams not only for content but also for level of learning*practicing identifying subtle similarities and differences among facts and ideas that will likely be included on the exam, and could be confused with one another*undefined*undefined*undefined*undefined*undefined*undefined', NULL, 28),
(392, 'Pick the best answer. You should', 'always decide on an answer before reading the alternatives*always do the multiple choice items on an exam first*never change an answer*always review your marked exams*undefined*undefined*undefined*undefined*undefined*undefined', 1, 28),
(393, 'It is unlikely that a student who is unskilled in untangling negative statements', 'will quickly understand multiple choice items written in this way*will not quickly understand multiple choice items written in this way*will quickly understand multiple choice items not written in this way*will not quickly understand multiple choice items not written in this way*undefined*undefined*undefined*undefined*undefined*undefined', 2, 28),
(394, 'You notice that your two hour exam is composed entirely of multiple choice questions. The best way to organize your time is to', 'calculate how much time you can spend on average for each question, answer the easy ones, then spend more time on the difficult ones until you run out of time, then quickly guess the answers to the ones you still haven''t done before you hand in the exam*read ALL of the stem and EVERY alternative, eliminating any obviously incorrect answers*mark questions with negatives, superlatives, and qualifiers, then grammatically break down difficult questions*take a few minutes to relax by taking a few deep breaths and getting focused*undefined*undefined*undefined*undefined*undefined*undefined', 3, 28),
(395, 'You are taking a math course, and the exams are in multiple choice format. They require you to solve problems, then pick the closest answer from the alternatives given. To study effectively, you should', 'memorize formulae, and practice recognizing them. Pay particular attention to the similarities and differences among them.*go over your notes and the text carefully*practice doing representative problems until you can do them quickly and accurately*practice estimating answers to representative problems*undefined*undefined*undefined*undefined*undefined*undefined', NULL, 28),
(396, 'Level of learning of a multiple choice question is determined by', 'the goals and objectives stated in the course syllabus*the level of Bloom''s Taxonomy that best fits the educational goal of the question*the level of generality of the abstract terms within the question*the level of learning required by the task you must perform to decide which alternative to choose*undefined*undefined*undefined*undefined*undefined*undefined', 1, 28),
(397, 'Marked exams can provide valuable feedback because', 'they can help you zero in on effective study techniques*they can help you focus on important content in the course*they can help you decide what levels of thinking you should practice for future exams*all of the above*undefined*undefined*undefined*undefined*undefined*undefined', 2, 28),
(398, 'Students often believe that they should not change answers because', 'research shows that students most often change answers from right to wrong*they only notice the answers they changed from right to wrong, and not the ones they changed from wrong to right*they know from personal experience that they can talk themselves out of a right answer more readily than they can talk themselves out of a wrong answer*human nature is such that one''s first reaction is often the best one*undefined*undefined*undefined*undefined*undefined*undefined', 3, 28),
(399, 'When would you study for a multiple choice test using strategies that would enhance recall?', 'If you are an auditory learner*When the questions require a high level of critical thinking*When the alternatives are very complex*When the alternatives are very similar*undefined*undefined*undefined*undefined*undefined*undefined', NULL, 28),
(400, 'You would study for a multiple choice test using strategies that would enhance recognition under which of the following conditions? Check all correct options.', 'The alternatives are identical (word-for-word) to what you study, rather than paraphrased*The alternatives require higher rather than lower levels of learning*The alternatives are always quite dissimilar*You do not get confused by incorrect information*undefined*undefined*undefined*undefined*undefined*undefined', 1, 28),
(401, '', '*********', NULL, 29),
(402, '', '*********', NULL, 29),
(403, '', '*********', NULL, 29),
(404, '', '*********', NULL, 29),
(405, '', '*********', NULL, 29),
(406, '', '*********', NULL, 29),
(407, '', '*********', NULL, 29),
(408, '', '*********', NULL, 29),
(409, '', '*********', NULL, 29),
(410, '', '*********', NULL, 29),
(411, '', '*********', NULL, 29),
(412, '', '*********', NULL, 29),
(413, '', '*********', NULL, 29),
(414, '', '*********', NULL, 29),
(415, '', '*********', NULL, 29),
(416, '', '*********', NULL, 29),
(417, '', '*********', NULL, 29),
(418, '', '*********', NULL, 29),
(419, '', '*********', NULL, 29),
(420, '', '*********', NULL, 29),
(421, '', '*********', NULL, 29),
(422, '', '*********', NULL, 29),
(423, '', '*********', NULL, 29),
(424, '', '*********', NULL, 29),
(425, '', '*********', NULL, 29),
(426, '', '*********', NULL, 29),
(427, '', '*********', NULL, 29),
(428, '', '*********', NULL, 29),
(429, '', '*********', NULL, 29),
(430, '', '*********', NULL, 29),
(431, '', '*********', NULL, 29),
(432, '', '*********', NULL, 29),
(433, '', '*********', NULL, 29),
(434, '', '*********', NULL, 29),
(435, '', '*********', NULL, 29),
(436, '', '*********', NULL, 29),
(437, '', '*********', NULL, 29),
(438, '', '*********', NULL, 29),
(439, '', '*********', NULL, 29),
(440, '', '*********', NULL, 29),
(441, '', '*********', NULL, 29),
(442, '', '*********', NULL, 29),
(443, '', '*********', NULL, 29),
(444, '', '*********', NULL, 29),
(445, '', '*********', NULL, 29),
(446, '', '*********', NULL, 29),
(447, '', '*********', NULL, 29),
(448, '', '*********', NULL, 29),
(449, '', '*********', NULL, 29),
(450, '', '*********', NULL, 29),
(451, '', '*********', NULL, 29),
(452, '', '*********', NULL, 29),
(453, '', '*********', NULL, 29),
(454, '', '*********', NULL, 29),
(455, '', '*********', NULL, 29),
(456, '', '*********', NULL, 29),
(457, '', '*********', NULL, 29),
(458, '', '*********', NULL, 29),
(459, '', '*********', NULL, 29),
(460, '', '*********', NULL, 29),
(461, '', '*********', NULL, 29),
(462, '', '*********', NULL, 29),
(463, '', '*********', NULL, 29),
(464, '', '*********', NULL, 29),
(465, '', '*********', NULL, 29),
(466, '', '*********', NULL, 29),
(467, '', '*********', NULL, 29),
(468, '', '*********', NULL, 29),
(469, '', '*********', NULL, 29),
(470, '', '*********', NULL, 29),
(471, '', '*********', NULL, 29),
(472, '', '*********', NULL, 29),
(473, '', '*********', NULL, 29),
(474, '', '*********', NULL, 29),
(475, '', '*********', NULL, 29),
(476, '', '*********', NULL, 29),
(477, '', '*********', NULL, 29),
(478, '', '*********', NULL, 29),
(479, '', '*********', NULL, 29),
(480, '', '*********', NULL, 29),
(481, '', '*********', NULL, 29),
(482, '', '*********', NULL, 29),
(483, '', '*********', NULL, 29),
(484, '', '*********', NULL, 29),
(485, '', '*********', NULL, 29),
(486, '', '*********', NULL, 29),
(487, '', '*********', NULL, 29),
(488, '', '*********', NULL, 29),
(489, '', '*********', NULL, 29),
(490, '', '*********', NULL, 29),
(491, '', '*********', NULL, 29),
(492, '', '*********', NULL, 29),
(493, '', '*********', NULL, 29),
(494, '', '*********', NULL, 29),
(495, '', '*********', NULL, 29),
(496, '', '*********', NULL, 29),
(497, '', '*********', NULL, 29),
(498, '', '*********', NULL, 29),
(499, '', '*********', NULL, 29),
(500, '', '*********', NULL, 29),
(501, '', '*********', NULL, 29),
(502, '', '*********', NULL, 29),
(503, '', '*********', NULL, 29),
(504, '', '*********', NULL, 29),
(505, '', '*********', NULL, 29),
(506, '', '*********', NULL, 29),
(507, '', '*********', NULL, 29),
(508, '', '*********', NULL, 29),
(509, '', '*********', NULL, 29),
(510, '', '*********', NULL, 29),
(511, '', '*********', NULL, 29),
(512, '', '*********', NULL, 29),
(513, '', '*********', NULL, 29),
(514, '', '*********', NULL, 29),
(515, '', '*********', NULL, 29),
(516, '', '*********', NULL, 29),
(517, '', '*********', NULL, 29),
(518, '', '*********', NULL, 29),
(519, '', '*********', NULL, 29),
(520, '', '*********', NULL, 29),
(521, '', '*********', NULL, 29),
(522, '', '*********', NULL, 29),
(523, '', '*********', NULL, 29),
(524, '', '*********', NULL, 29),
(525, '', '*********', NULL, 29),
(526, '', '*********', NULL, 29),
(527, '', '*********', NULL, 29),
(528, '', '*********', NULL, 29),
(529, '', '*********', NULL, 29),
(530, '', '*********', NULL, 29),
(531, '', '*********', NULL, 29),
(532, '', '*********', NULL, 29),
(533, '', '*********', NULL, 29),
(534, '', '*********', NULL, 29),
(535, '', '*********', NULL, 29),
(536, '', '*********', NULL, 29),
(537, '', '*********', NULL, 29),
(538, '', '*********', NULL, 29),
(539, '', '*********', NULL, 29),
(540, '', '*********', NULL, 29),
(541, '', '*********', NULL, 30),
(542, '', '*********', NULL, 30),
(543, '', '*********', NULL, 30),
(544, '', '*********', NULL, 30),
(545, '', '*********', NULL, 30),
(546, '', '*********', NULL, 30),
(547, '', '*********', NULL, 30),
(548, '', '*********', NULL, 30),
(549, '', '*********', NULL, 30),
(550, '', '*********', NULL, 30),
(551, '', '*********', NULL, 30),
(552, '', '*********', NULL, 30),
(553, '', '*********', NULL, 30),
(554, '', '*********', NULL, 30),
(555, '', '*********', NULL, 30),
(556, '', '*********', NULL, 30),
(557, '', '*********', NULL, 30),
(558, '', '*********', NULL, 30),
(559, '', '*********', NULL, 30),
(560, '', '*********', NULL, 30),
(561, '', '*********', NULL, 30),
(562, '', '*********', NULL, 30),
(563, '', '*********', NULL, 30),
(564, '', '*********', NULL, 30),
(565, '', '*********', NULL, 30),
(566, '', '*********', NULL, 30),
(567, '', '*********', NULL, 30),
(568, '', '*********', NULL, 30),
(569, '', '*********', NULL, 30),
(570, '', '*********', NULL, 30),
(571, '', '*********', NULL, 30),
(572, '', '*********', NULL, 30),
(573, '', '*********', NULL, 30),
(574, '', '*********', NULL, 30),
(575, '', '*********', NULL, 30),
(576, '', '*********', NULL, 30),
(577, '', '*********', NULL, 30),
(578, '', '*********', NULL, 30),
(579, '', '*********', NULL, 30),
(580, '', '*********', NULL, 30),
(581, '', '*********', NULL, 30),
(582, '', '*********', NULL, 30),
(583, '', '*********', NULL, 30),
(584, '', '*********', NULL, 30),
(585, '', '*********', NULL, 30),
(586, '', '*********', NULL, 30),
(587, '', '*********', NULL, 30),
(588, '', '*********', NULL, 30),
(589, '', '*********', NULL, 30),
(590, '', '*********', NULL, 30),
(591, '', '*********', NULL, 30),
(592, '', '*********', NULL, 30),
(593, '', '*********', NULL, 30),
(594, '', '*********', NULL, 30),
(595, '', '*********', NULL, 30),
(596, '', '*********', NULL, 30),
(597, '', '*********', NULL, 30),
(598, '', '*********', NULL, 30),
(599, '', '*********', NULL, 30),
(600, '', '*********', NULL, 30),
(601, '', '*********', NULL, 30),
(602, '', '*********', NULL, 30),
(603, '', '*********', NULL, 30),
(604, '', '*********', NULL, 30),
(605, '', '*********', NULL, 30),
(606, '', '*********', NULL, 30),
(607, '', '*********', NULL, 30),
(608, '', '*********', NULL, 30),
(609, '', '*********', NULL, 30),
(610, '', '*********', NULL, 30),
(611, '', '*********', NULL, 30),
(612, '', '*********', NULL, 30),
(613, '', '*********', NULL, 30),
(614, '', '*********', NULL, 30),
(615, '', '*********', NULL, 30),
(616, '', '*********', NULL, 30),
(617, '', '*********', NULL, 30),
(618, '', '*********', NULL, 30),
(619, '', '*********', NULL, 30),
(620, '', '*********', NULL, 30),
(621, '', '*********', NULL, 30),
(622, '', '*********', NULL, 30),
(623, '', '*********', NULL, 30),
(624, '', '*********', NULL, 30),
(625, '', '*********', NULL, 30),
(626, '', '*********', NULL, 30),
(627, '', '*********', NULL, 30),
(628, '', '*********', NULL, 30),
(629, '', '*********', NULL, 30),
(630, '', '*********', NULL, 30),
(631, '', '*********', NULL, 30),
(632, '', '*********', NULL, 30),
(633, '', '*********', NULL, 30),
(634, '', '*********', NULL, 30),
(635, '', '*********', NULL, 30),
(636, '', '*********', NULL, 30),
(637, '', '*********', NULL, 30),
(638, '', '*********', NULL, 30),
(639, '', '*********', NULL, 30),
(640, '', '*********', NULL, 30),
(641, '', '*********', NULL, 30),
(642, '', '*********', NULL, 30),
(643, '', '*********', NULL, 30),
(644, '', '*********', NULL, 30),
(645, '', '*********', NULL, 30),
(646, '', '*********', NULL, 30),
(647, '', '*********', NULL, 30),
(648, '', '*********', NULL, 30),
(649, '', '*********', NULL, 30),
(650, '', '*********', NULL, 30),
(651, '', '*********', NULL, 30),
(652, '', '*********', NULL, 30),
(653, '', '*********', NULL, 30),
(654, '', '*********', NULL, 30),
(655, '', '*********', NULL, 30),
(656, '', '*********', NULL, 30),
(657, '', '*********', NULL, 30),
(658, '', '*********', NULL, 30),
(659, '', '*********', NULL, 30),
(660, '', '*********', NULL, 30),
(661, '', '*********', NULL, 30),
(662, '', '*********', NULL, 30),
(663, '', '*********', NULL, 30),
(664, '', '*********', NULL, 30),
(665, '', '*********', NULL, 30),
(666, '', '*********', NULL, 30),
(667, '', '*********', NULL, 30),
(668, '', '*********', NULL, 30),
(669, '', '*********', NULL, 30),
(670, '', '*********', NULL, 30),
(671, '', '*********', NULL, 30),
(672, '', '*********', NULL, 30),
(673, '', '*********', NULL, 30),
(674, '', '*********', NULL, 30),
(675, '', '*********', NULL, 30),
(676, '', '*********', NULL, 30),
(677, '', '*********', NULL, 30),
(678, '', '*********', NULL, 30),
(679, '', '*********', NULL, 30),
(680, '', '*********', NULL, 30);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `state` varchar(35) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `zipcode` int(6) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `ip_address` varbinary(16) DEFAULT NULL,
  `last_logged_ip` varchar(15) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL COMMENT '0 - registration pending, 1 - active client',
  PRIMARY KEY (`register_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `b_country` (`country`),
  KEY `status` (`active`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `training_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_control_no` varchar(45) DEFAULT NULL,
  `for_company` varchar(255) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `training_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`training_id`),
  UNIQUE KEY `batch_control_no_UNIQUE` (`batch_control_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training_attendance`
--

CREATE TABLE IF NOT EXISTS `training_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_control_no` varchar(45) DEFAULT NULL,
  `trainee_id` varchar(45) DEFAULT NULL,
  `days` int(2) DEFAULT NULL,
  PRIMARY KEY (`attendance_id`),
  UNIQUE KEY `batch_control_no_UNIQUE` (`batch_control_no`),
  UNIQUE KEY `trainee_id_UNIQUE` (`trainee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` varchar(15) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`, `displayname`, `email`, `imagepath`) VALUES
(1, 'student', '81dc9bdb52d04dc20036dbd8313ed055', 'student', 'Student', 'racarongoy@yahoo.com', ''),
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'administrator', 'Administrator', 'admin@alliancemansols.com', ''),
(3, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'instructor', 'Trainer Jongski', 'pjongski@ami.com', ''),
(4, 'clerk', '81dc9bdb52d04dc20036dbd8313ed055', 'hr', 'HR Clerk', 'hr@alliancemansols.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
