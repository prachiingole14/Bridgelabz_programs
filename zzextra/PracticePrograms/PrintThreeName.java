/*
	Write a program “ PrintThreeNames.java ” that takes three names as input and
	prints out a proper sentence with the names in the reverse of the order given, so
	that for example, " java PrintThreeNames Alice Bob Carol " gives "Hi Carol, Bob,
	and Alice."
*/

package PracticePrograms;
import java.util.Scanner;

public class PrintThreeName 
{
	public static void main(String[] args) 
	{
		Scanner in = new Scanner(System.in);
		System.out.println("Enter Three Names: ");
		String str = in.nextLine();
		String[] rev = str.split(" ");
		
		for(int i = rev.length-1; i > rev.length-4; i--)
		{
			System.out.println(rev[i]);
		}
	}
}
