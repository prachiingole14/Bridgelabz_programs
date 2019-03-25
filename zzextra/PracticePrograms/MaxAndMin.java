package PracticePrograms;

import java.util.Scanner;

public class MaxAndMin 
{
	public static void main(String[] args)
	{
		int a,b;
		System.out.println("Enter two values:");
		Scanner in = new Scanner(System.in);
	    a = in.nextInt();
	    b = in.nextInt();
	    
	    System.out.println("Maximum No: "+Math.max(a, b)); 
	    System.out.println("Minimum No: "+Math.min(a, b)); 
	}

}
