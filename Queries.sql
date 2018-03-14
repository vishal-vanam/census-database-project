(i)  create table individuals(iid int auto_increment, fname varchar(20), mname varchar(20), lname varchar(20), dateofbirth date, oid int, rid int, aid int, cid int, gender varchar(20),ethnic varchar(20),  PRIMARY KEY(iid),  FOREIGN KEY(oid) references OCCUPATION(oid), FOREIGN KEY(rid) references RELIGION(rid), FOREIGN KEY(aid) references ADDRESS(aid), FOREIGN KEY(cid) references CENSUS(cid));

(ii) create table occupation(oid int auto_increment, odesc varchar(20), PRIMARY KEY(oid));

(iii) create table religion(rid int auto_increment, rdesc varchar(20), PRIMARY KEY(rid));

(iv) create table census(cid int auto_increment, cdate date, PRIMARY KEY(cid));

(v) create table address(aid int auto_increment, line1 varchar(20), line2 varchar(20), town varchar(20), state varchar(20), country varchar(20), PRIMARY KEY(aid));

(vi) create table locations(lid int auto_increment, town varchar(20), PRIMARY KEY(lid), FOREIGN KEY(town) references ADDRESS);

(vii) create table hospital(hid int auto_increment, hdesc varchar(40), town varchar(20), PRIMARY KEY(hid), FOREIGN KEY(town) references ADDRESS); 

(viii) create table mall(mid int auto_increment, mdesc varchar(40), town varchar(20), PRIMARY KEY(mid), FOREIGN KEY(town) references ADDRESS); 

(ix) create table office(ocode int auto_increment, oname varchar(40), town varchar(20), PRIMARY KEY(ocode), FOREIGN KEY(town) references ADDRESS); 



(x) UPDATE table_name 
	SET col_name=val,..
		WHERE ;

(xi) ALTER table table_name
	add col_name col_type;

