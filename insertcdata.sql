
INSERT INTO `course` (`name`, `award`, `year`) VALUES
('HNDWEBEN-F232A-L', 'HND', '23/24'),
('HNDWEBEN-F231A-L', 'HNC', '23/24');

INSERT INTO `event` (`added_by`, `date`, `description`, `added_on`, `updated_by`) VALUES
(1, '2023-12-15 10:00:00', 'Welcome Orientation', '2023-12-10 08:30:00', NULL),
(1, '2023-12-18 14:30:00', 'Guest Lecture on Science and Technology', '2023-12-12 09:45:00', NULL),
(1, '2023-12-20 09:00:00', 'Sports Day Kick-off', '2023-12-15 11:20:00', NULL),
(1, '2023-12-22 18:00:00', 'Annual Talent Show', '2023-12-18 15:10:00', NULL),
(1, '2023-12-25 12:30:00', 'Holiday Celebration', '2023-12-20 14:55:00', NULL);


INSERT INTO `news` (`title`, `description`, `added_on`, `added_by`) VALUES
('New Campus Initiatives', 'Exciting new initiatives are coming to our campus to enhance the overall student experience.', '2023-12-15 09:15:00', 1),
('Research Symposium Announcement', 'The annual research symposium is scheduled for next month. Submit your abstracts and be a part of this intellectual event.', '2023-12-18 14:00:00', 1),
('Career Fair Success', 'Our recent career fair was a tremendous success, with students securing internships and job opportunities from top companies.', '2023-12-20 11:30:00', 1),
('Upcoming Alumni Reunion', 'Calling all alumni! Don’t miss the upcoming reunion on January 5th. Reconnect with old friends and share your success stories.', '2023-12-22 17:45:00', 1),
('Student Achievements', 'Congratulations to our students for their outstanding achievements in various fields. We are proud of your hard work and dedication!', '2023-12-25 13:45:00', 1);



INSERT INTO `unit` (`name`, `description`) VALUES
('Unit One', 'description of unit one'),
('Unit Two', 'description of unit Two'),
('Unit Three', 'description of unit three'),
('Unit Four', 'description of unit four'),
('Unit Five', 'description of unit Five');
