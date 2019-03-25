/*
 Write a program FlipCoin.java to simulate a coin flip and print out "Heads" or
"Tails" accordingly and finally print the percentage of Head vs Tail.
 */

package PracticePrograms;
import java.util.Random;
import java.util.Scanner;

public class FlipCoin 
{
	public static void main(String[] args) 
	{
		double head=0,tail=0;
		int i,n;
		double randomNo;
		System.out.println("Enter size of n :");
		Scanner in = new Scanner(System.in);
	    n = in.nextInt();
		for(i=0;i<n;i++)
		{
			randomNo=Math.random();
			System.out.println(+randomNo);
			if(i<0.5)
			{
				tail=tail+1;
			}
			
			else
			{
				head=head+1;
			}
		}
		
		tail=(tail/n)*100;
		head=(head/n)*100;
		System.out.println("Percentage of tail :"+tail);
		System.out.println("Percentage of head :"+head);
	
	}
}
