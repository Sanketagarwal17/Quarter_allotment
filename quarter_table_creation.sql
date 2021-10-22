CREATE TABLE quarter_info
(
quarter_id varchar(255) NOT NULL PRIMARY KEY,
quarter_name varchar(255),
number_of_rooms int(2),
number_of_people int(2),
carpet_area int(4),
date_of_opening date,
number_of_washroom int(2),
is_balcony bool,
is_parking bool,
additional_info varchar(1024),
eligibility_requirement enum("Professor","Peon"),
is_deleted bool,
type_of_quarter enum("A","B","C"),
flat_number int(4),
building_name varchar(255),
address varchar(1024),
reserved_for int(4),
license_fee int(6),
number_of_socket int (3),
number_of_meters int(2),
number_of_fan int(3),
is_geyser bool,
number_of_entrance int(2),
is_occupied bool,
emp_id int(4)
);

        