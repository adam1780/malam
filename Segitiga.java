/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author SMK2
 */
public class Segitiga {
    double alas ;
    double tinggi ;
    double hitungluas() {
    return ((alas*tinggi)/2);
    }
    }
    class SegitigaApp {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    Segitiga p1 = new Segitiga();
    Segitiga p2 = new Segitiga();
    p1.alas = 10;
    p1.tinggi = 8;
    p2.alas = 5;
    p2.tinggi = 4;
    System.out.println("Luas Segitiga = " + p1.hitungluas());
    System.out.println("Luas Segitiga = " + p2.hitungluas());
    }
    }
