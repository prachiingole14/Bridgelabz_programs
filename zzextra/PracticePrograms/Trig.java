/*
	Write a program Trig.java to illustrate various trigonometric functions in the Math
	library, such as Math.sin(), Math.cos(), and Math.toRadians(). Firstly reads in an
	angle (in degrees), converts to radians, and then performs various trigonometric
	calculations.
*/

package PracticePrograms;
import java.util.Scanner;

public class Trig
{
	public static void main(String[] args)
	{
		double degree;
		System.out.println("Enter value in the for of degree : ");
		Scanner in = new Scanner(System.in);
        degree = in.nextInt();
        
        double radians = Math.toRadians(degree);
        
        double sinValue = Math.sin(radians);
        double cosValue = Math.cos(radians); 
        double radiansValue = Math.toRadians(radians); 
        
        System.out.println("value for sin:" +sinValue);
        System.out.println("value for cos:" +cosValue);
        System.out.println("value for radians:" +radiansValue);
	}
}
