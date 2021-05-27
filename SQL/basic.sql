-- 테이블 생성
--CREATE TABLE table-name (

--)

CREATE TABLE `members`(
  `idx` INT NOT NULL AUTO_INCREMENT COMMENT '고유번호',
  `id` VARCHAR(15) NOT NULL COMMENT '아이디',
  `name` VARCHAR(25) NOT NULL COMMENT '이름',
  `pass` VARCHAR(30) NOT NULL COMMENT '비밀번호',
  `phone` VARCHAR(13) NOT NULL COMMENT '휴대폰 번호',
  PRIMARY KEY(`idx`)
) charset=utf8 comment = '회원정보'

  --컬럼 이름 : idx, INT :숫자, NOT NULL :필수 입력값,
  --AUTO_INCREMENT :자동 증가, COMMENT :설명
  --VARCHAR(15) :변할 수 있는 공간, 길이 15


-- DROP TABLE TABLE-NAME
DROP TABLE members

-- 필드 추가 ALTER TABLE TABLE-NAME ADD [추가할 필드명] [필드 속성] AFTER [필드 위치]
ALTER TABLE members ADD current_age INT COMMENT '나이' AFTER phone

-- 필드 변경 ALTER TABLE TABLE-NAME CHANGE [기존 필드명] [변경할 필드명] [속성]
ALTER TABLE members CHANGE current_age nationality VARCHAR(20) COMMENT '국적'

-- 데이터 입력 INSERT INTO TABLE-NAME (field1, field2, ...) VALUES ('field value1', 'field value2' ...)
-- 데이터 입력 시 고유번호는 입력하지 않는다. primary값이 있어서
INSERT INTO members(id, name, pass, phone, nationality) VALUES ('Ssongd', '송다영', '123456', '010-1234-5678', 'Korea')