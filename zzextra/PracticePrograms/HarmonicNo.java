/*
 Write a program HarmonicNumber.java that takes a command­line argument n
and prints the nth harmonic number. Harmonic Number is of the form
 */
package PracticePrograms;
import java.util.Scanner;

public class HarmonicNo 
{
	public static void main(String[] args) 
	{
		int i, n;
		float hn=0;
		System.out.println("Enter size of n :");
		n=Integer.parseInt(args[0]);
		
		for(i=1;i<n;i++)
		{
			hn=hn+(float)1/i;
			System.out.print("1/"+i+"+");
		}
		System.out.println("="+hn);
	}
}
