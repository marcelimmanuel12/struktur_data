#include<iostream>
#include<string>
using namespace std;

void nama(string nama) {
    cout << "Nama saya adalah " << nama << endl;
}
void umur(int umur) {
    cout << "umur saya adalah " << umur << endl;
}

int main() {
    nama("Marcel");
    umur(19);
    cout << "saya suka belajar" << endl;
}