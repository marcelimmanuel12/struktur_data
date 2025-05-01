#include <iostream>

using namespace std; 

void tambah(int a, int b) {
    cout << "hasil tambah =" << a + b << endl;
}
void kurang(int a, int b) {
    cout << "hasil kurang =" << a - b << endl;
}
void kali(int a, int b) {
    cout << "hasil kali =" << a * b << endl; 
}
void bagi(int a, int b ) {
    cout << "hasil bagi =" << a / b << endl;
}

int main() {
    int x, y;
    cout << "masukkan angka :" << endl;
    cin >> x >> y;

    tambah(x, y);
    kurang(x, y);
    kali(x, y);
    bagi(x, y);
    return 0;
}

