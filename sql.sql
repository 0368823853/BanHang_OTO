Table user {
  id int(10) [PK]
  fullname varchar(150)
  email varchar(150)
  phone int(10)
  password varchar(50)
  role_id int(10)
}
Table sanpham{
  id int(10) [PK]
  danhmuc_id int(10)
  fullname varchar(300)
  image char(200)
  dongia int(20)
  mota longtext
}
Table role{
  id int(10) [PK]
  name varchar(150)
}
Table nhanvien{
  id int(10) [PK]
  fullname varchar(250)
  email varchar(250)
  password varchar(250)
}
Table linhkien{
  id int(10) [PK]
  fullname varchar(200)
  dongia varchar(20)
  soluong int(11)
  ngaynhap date
  image varchar(450)
  xuatxu varchar(200)
  mota longtext
}
Table lienhe{
  id int(10) [PK]
  fullname varchar(150)
  email varchar(150)
  phone int(10)
  tieude varchar(200)
  noidung varchar(450)
}
Table hotro{
  id int(10) [PK]
  fullname varchar(250)
  phone int(11)
  email varchar(250)
  noidung longtext
  tinhtrang varchar(250)
  diachi varchar(250)
}
Table danhmuc{
  id int(10) [PK]
  name varchar(150)
}
Table cart{
  id int(10) [PK]
  image varchar(450)
  fullname varchar(250)
  dongia varchar(20)
  xuatxu varchar(250)
}

Ref: "role"."id" < "user"."role_id"

Ref: "danhmuc"."id" < "sanpham"."id"