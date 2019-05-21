INSERT INTO `frontend_settings` (`frontend_settings_id`, `type`, `value`) VALUES ('44', 'registration_message', '<b><h2>Thanks For Registration !&nbsp;</h2></b><div>You Have To Wait For Admin Approval. Approval Confirmation Will Be Sent To Your Email. \r\n');
INSERT INTO `frontend_settings` (`frontend_settings_id`, `type`, `value`) VALUES ('45', 'registration_message_image', '[{\"image\":\"registration_message_image1548057147.jpg\"}]');

INSERT INTO `general_settings` (`general_settings_id`, `type`, `value`) VALUES ('86', 'member_approval_by_admin', 'yes');

ALTER TABLE `member` ADD `status` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'approved' AFTER `member_profile_id`;

ALTER TABLE `deleted_member` ADD `status` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'approved' AFTER `member_profile_id`;
ALTER TABLE `deleted_member` ADD `report_profile` LONGTEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL AFTER `pic_privacy`;
ALTER TABLE `deleted_member` ADD `reported_by` INT NOT NULL DEFAULT '0' AFTER `report_profile`;

INSERT INTO `email_template` (`email_template_id`, `title`, `subject`, `body`) VALUES ('6', 'Member Approval Email', 'Member Approval', 'Hi [[to]],\r\nYour account type is : [[account_type]]\r\nEmail is : [[email]]\r\nThank you for registering at our site. Your account has been approved. Please contact with the administration team if you have any further question. Best wishes.\r\nYou will be able to login from here : [[url]]\r\nPlease contact with the administration team if you have any further question. Best wishes.\r\nThanks,\r\n[[from]]');
INSERT INTO `email_template` (`email_template_id`, `title`, `subject`, `body`) VALUES ('7', 'Account Opening From User Email', 'Account Opening From User', 'Hi [[to]],\r\nThank you for registering at our site [[sitename]].\r\nYour account type is : [[account_type]]\r\nEmail is : [[email]]\r\nPassword is : [[password]]\r\nYour account is now being reviewed by administration team. Please wait for Admin approval. You will get a confirmation email soon and after that you will be able to login from here : [[url]]\r\nPlease contact with the administration team if you have any further question. Best wishes.\r\nThanks,\r\n[[from]]');
INSERT INTO `email_template` (`email_template_id`, `title`, `subject`, `body`) VALUES ('8', 'Member Registration Email to Admin', 'User Registration', 'Congratulation!\r\nYou have a new Registered Member in your system.\r\nMember Name : [[member_name]]\r\nEmail is : [[email]]\r\nThanks,\r\n\r\n[[from]]');
