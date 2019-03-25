/*
 Write a program PowerOf2.java that takes a command­line argument n and prints a
table of the powers of 2 that are less than or equal to 2^n. 
 */

package PracticePrograms;
import java.util.Scanner;

public class PowerOf2 
{

	public static void main(String[] args)
	{
		int power=1,i,n;
		System.out.println("Enter size of n :");
		n=Integer.parseInt(args[0]);
		
		for(i=0;i<n;i++)
		{
			System.out.println("2^" +i +" = " +power);
			power=power*2;
		}
		
	}

}
