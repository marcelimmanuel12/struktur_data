#include<iostream>
using namespace std;
 

int main(){
    int x, y;
    cout << "Masukkan angka : " << endl;
    cin >> x >> y;
    char pilihan;
    cout << "Pilih operasi (+, -, *, /) : ";
    cin >> pilihan;

switch (pilihan) {
    case '+':
        cout << "Hasil: " << x + y << endl;
        break;
        case '-':
        cout << "Hasil: " << x - y << endl;
        break;
        case '*':
        cout << "Hasil : " << x * y << endl;
        break;
        case '/':
        cout << "Hasil : " << x / y << endl;
        break;
        default:
        cout << "Operasi tidak valid" << endl;
        break;
}
}