def binary_search(arr, search, left, right ):
    if left > right:
        return -1
    mid = left + ((right-left)//2)

    if arr[mid] == search:
        return mid

    if arr[mid] < search:
        return binary_search(arr, search, mid+1, right)
    else:
        return binary_search(arr, search, left, mid-1 )


arr = [2,3,4,5,7,8,9,10,20,33,40,42,44,45,55,65,68,76,98,101,202,203,204,205,206,207,208,209,210,211,212,2111]
search = 211
print(f"\n<br>Searching for {search} in the array {arr}")
res = binary_search(arr, search, 0, (len(arr)-1))
if res != -1:
    print(f"\n<br>Found search at key: {res}")