class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class LinkedList:
    def __init__(self):
        self.head = None

    def detectAndRemoveLoop(self):
        slow_p = fast_p = self.head

        while( slow_p and fast_p and fast_p.next ):
            slow_p = slow_p.next
            fast_p = fast_p.next.next
            print(slow_p.data, end=" ")
            print(fast_p.data)
            if slow_p == fast_p:
                print('met at '+str(slow_p.data))
                self.removeLoop(slow_p)
                return 1
        return 0

    def removeLoop(self, loop_node):
        ptr1 = loop_node
        ptr2 = loop_node

        k = 1
        while( ptr1.next != ptr2 ):
            ptr1 = ptr1.next
            k += 1
        
        ptr1 = self.head
        ptr2 = self.head

        for i in range(k):
            ptr2 = ptr2.next

        while( ptr1 != ptr2 ):
            ptr1 = ptr1.next
            ptr2 = ptr2.next
        
        while( ptr2.next != ptr1 ):
            ptr2 = ptr2.next

        ptr2.next = None

    def push(self, new_data):
        new_node = Node(new_data)
        new_node.next = self.head
        self.head = new_node
    
    def printList(self):
        tmp = self.head
        k = 0
        while(tmp):
            k += 1
            print(tmp.data, end=" ")
            tmp = tmp.next
            if k > 20:
                break

list1 = LinkedList()
list1.push(10)
list1.push(4)
list1.push(7)
list1.push(9)
list1.push(15)
list1.push(17)
list1.push(20)
list1.push(50)

print("Linked List ")
list1.printList()
print('')

# Create a loop for testing
print(list1.head.next.next.next.next.next.next.next.data)
print(list1.head.next.next.next.next.data)
list1.head.next.next.next.next.next.next.next.next = list1.head.next.next.next.next

print('loop at '+str(list1.head.next.next.next.next.data))

print("Linked List nefore ")
list1.printList()

list1.detectAndRemoveLoop()

print("Linked List after ")
list1.printList()
print('')
