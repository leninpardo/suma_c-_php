#include <iostream>
#include <cstdlib>
using namespace std;

int main(int argc, char *argv[])
{
  if (argc != 3)
    cout << "Uso: suma entero1 entero2\n";
  else
    {
      int a,b,MCD,sum;
      a = atoi(argv[1]);
      b = atoi(argv[2]);
      sum=a+b;
      cout<<"la suma es="<<sum;
    
    }
  return 0;
}
