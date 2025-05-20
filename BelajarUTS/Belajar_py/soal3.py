def cetak_ganjil(n):
    for i in range(1, n + 1, 2):
        if i % 2 != 0:
            print(i)
print(cetak_ganjil(10))

