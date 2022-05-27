class bubbleSort:
    def sort_this(self, array:list) -> list:
        swapped = True
        while swapped == True:
            swapped = False
            for j in range( len(array)-1 ):
                if array[j] > array[j+1]:
                    t = array[j]
                    array[j] = array[j+1]
                    array[j+1] = t
                    swapped = True
                    
        return array

test_array = [3, 0, 2, 5, -1, 4, 1]
print( "Original Array :\n");
print( test_array );
print( "\nSorted Array\n:" );
sort = bubbleSort();
sorted = sort.sort_this(test_array);
print(sorted);