/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author user
 */
public class person {
 private String name;
private String address;
public person (){
System.out.println("Inside Person:Constructor");
name = "";
address = "";
}
public person (String name, String address){
this.name = name;
this.address = address ;
}
public String getName(){
return name;
}
public String getAddress(){
return address;
}
public void setname(String name){
this.name = name;
}
public void setAddress(String address){
this.address = address;
}
} 
class Student extends person{
public Student(){
System.out.println("Inside Student:Constructor");
setname("David");
setAddress("Jakarta");
System.out.println("Name : "+getName() + "\nAddress : "+getAddress());
}
}
class main{
public static void main(String[] args){
Student s = new Student();
}
}  

