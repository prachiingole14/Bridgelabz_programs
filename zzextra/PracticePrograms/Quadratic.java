/*
  5.Write a program Quadratic.java to find the roots of the equation a*x*x + b*x + c.
	Since the equation is x*x, hence there are 2 roots. The 2 roots of the equation
	can be found using a formula
	delta = b*b ­ 4*a*c
	Root 1 of x = (­b + sqrt(delta))/(2*a)
	Root 2 of x = (­b ­ sqrt(delta))/(2*a)
	Take a, b and c as input values to find the roots of x.
*/

package PracticePrograms;
import java.util.Scanner;

public class Quadratic 
{
	public static void main(String[] args) 
	{
		 int a, b, c;
	      double root1, root2, d;
	      Scanner s = new Scanner(System.in);
	      System.out.println("Given quadratic equation:ax^2 + bx + c");
	      System.out.print("Enter a:");
	      a = s.nextInt();
	      System.out.print("Enter b:");
	      b = s.nextInt();
	      System.out.print("Enter c:");
	      c = s.nextInt();
	      System.out.println("Given quadratic equation:"+a+"x^2 + "+b+"x + "+c);
	      d = b * b - 4 * a * c;
	      
	      if(d > 0)
	      	{
	          System.out.println("Roots are real and unequal");
	          root1 = ( - b + Math.sqrt(d))/(2*a);
	          root2 = (-b - Math.sqrt(d))/(2*a);
	          System.out.println("First root is:"+root1);
	          System.out.println("Second root is:"+root2);
	      	}
		      else if(d == 0)
			      {
			          System.out.println("Roots are real and equal");
			          root1 = (-b+Math.sqrt(d))/(2*a);
			          System.out.println("Root:"+root1);
			      }
	      
			      else
					     {
					          System.out.println("Roots are imaginary");
					      }
	}

}
