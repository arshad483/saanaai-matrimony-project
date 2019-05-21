ALTER TABLE member
ADD report_profile LONGTEXT NULL;

ALTER TABLE member
ADD reported_by INT DEFAULT 0;
