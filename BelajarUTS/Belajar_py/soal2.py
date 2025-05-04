def gaji_pokok(gaji_pokok, bonus, potongan):
    gaji_pokok = gaji_pokok + bonus - potongan
    return gaji_pokok

gaji_pokokawal= 10000
bonus = 5000
potongan =2000
gaji = gaji_pokok(gaji_pokokawal, bonus, potongan)
print("Gaji pokok anda adlah", gaji)