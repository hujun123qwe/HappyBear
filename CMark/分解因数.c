/* Note:Your choice is C IDE */

/**
 *@time	2015-10-15 10:23:05
 *@for	������������12λ�� 
 */
#include "stdio.h"
main()
{
 int n,i;
 printf("input the number ");
 scanf("%d",&n);
 printf("%d=1*%d\n",n,n);
 printf("%d=",n);
 for(i=2;i<n;i++)
 { while(n!=i)
  { 
  if(n%i==0)
   {
  	 printf("%d*",i);
  	 n=n/i;
   }
  else
  break;
  } 
 }
printf("%d",n);
}
