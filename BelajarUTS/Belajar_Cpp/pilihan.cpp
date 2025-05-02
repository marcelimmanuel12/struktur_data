#include<iostream>
using namespace std;

int main() {
    int pilihan;
    cout << "1. Laki laki \n";
    cout << "2. Perempuan \n";

    cout << "Masukan Pilihan Anda: ";
    cin >> pilihan;
    if (pilihan == 1) {
        cout << "Anda adalah laki laki" << endl;
    } else if (pilihan == 2) {
        cout << "Anda adlah perempuan" << endl;
    } else {
        cout << "Pilihan tidak ada" << endl;
    }
    return 0;
}
