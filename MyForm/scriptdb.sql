create TABLE RegisterCourse(
    id serial PRIMARY key,
    studentname varchar(50),
    course varchar(50),
    dob date,
    gender varchar(10),
    fav varchar(50)
);
insert into RegisterCourse(studentname,
	course,dob,gender,fav) 
values('phuong','cloud computing','1/1/2019'
	,'male','sport;books');

select * from RegisterCourse;