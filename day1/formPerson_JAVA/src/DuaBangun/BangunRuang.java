package DuaBangun;

import java.util.Scanner;

public class BangunRuang {

	public static void main(String[] ar)
	{
		Scanner inp = new Scanner(System.in);
		Balok b = new Balok(); //objek b dari class Balok / instansiasi
		
		b.setPanjang(20); //nilai method setPanjang
		b.setLebar(20); //nilai method setLebar
		b.setTinggi(10);//nilai method setTinggi
		
		System.out.println("========== INPUT ==========");
		System.out.println("Panjang			= " + b.getPanjang()); 
		System.out.println("Lebar			= " + b.getLebar()); 
		System.out.println("Tinggi			= " + b.getTinggi()); 
		System.out.println("========== OUTPUT ==========");
		System.out.println("Volume Balok	= " + b.getVoume()); 
//		System.out.println("Luas Permukaan Balok : " + b.getLuasPemukaan());
		
	
	}
}
