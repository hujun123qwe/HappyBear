/* Note:Your choice is C IDE */
#include "stdio.h"
main()
{
   float sn=100.0,hn=sn/2;
   int n;
   for(n=2;n<=10;n++)
   {
   	sn=sn+2*hn;
   	hn=hn/2;
   }
   printf("the total road is %f\n",sn);
   printf("the ghost tenth is %f",hn);
    
}