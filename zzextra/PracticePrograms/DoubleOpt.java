/*
	2. Similarly write the DoubleOpt.java program by taking double value and doing the
	same operations.
	{
		1. Write a IntOpt.java program by taking a, b and c as input values and print the
		following integer operations a + b *c, a * b + c, c + a / b, and a % b + c. Please
		also understand the precedence of the operators.
	}
*/

package PracticePrograms;
import java.util.Scanner;

public class DoubleOpt 
{
	public static void main(String[] args) 
	{
		double a,b,c,d;
		Scanner in = new Scanner(System.in);
		
	     a = in.nextInt();
	     b = in.nextInt();
	     c = in.nextInt();
	     d = in.nextInt();
	     
	     double ans1, ans2, ans3, ans4;
	     
	     ans1= a + b * c;
	     ans2= a * b + c;
	     ans3= c + a / b;
	     ans4= a % b + c;
	     
	     System.out.println("Output for 1st expression:"+ans1);
	     System.out.println("Output for 2nd expression:"+ans2);
	     System.out.println("Output for 3rd expression:"+ans3);
	     System.out.println("Output for 4th expression:"+ans4);
	}

}
