/*
	Write a TemperaturConversion.java program, given the temperature in fahrenheit
	as input outputs the temperature in Celsius or viceversa using the formula
	Celsius to Fahrenheit: (°C × 9/5) + 32 = °F
	Fahrenheit to Celsius: (°F − 32) x 5/9 = °C
*/

package PracticePrograms;
import java.util.Scanner;

public class TemperatureConversion
{
	public static void main(String[] args) 
	{
		float temp1,temp2,celsius,fahrenheit;
		System.out.println("Enter temperature in celsius:");
		Scanner in = new Scanner(System.in);
		temp1 = in.nextInt();
		fahrenheit=(temp1*9)/5+32;
		System.out.println("After converting fahrenheit temperature will be:" +fahrenheit);
		
		System.out.println("Enter temperature in fahrenheit:");
		temp2 = in.nextInt();
		celsius=(temp2-32*5)/9;
		System.out.println("After converting celsius temperature will be:" +celsius);
	}
}
