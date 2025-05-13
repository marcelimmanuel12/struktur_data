hari = int(input("mauskan hari keberepa :"))

match hari:
    case 1:
        print("senin")
    case 2:
        print("selasa")
    case 3:
        print("rabu")
    case 4:
        print("kamis")
    case 5:
        print("jumat")
    case 6:
        print("sabtu")
    case 7:
        print("minggu")
    case _:
        print("tidak ada hari ke", hari)