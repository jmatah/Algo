from typing import Optional

# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

class Solution:
    def __init__(self):
        self.head = None

    def push(self, data):
        new_node = ListNode()
        new_node.val = data
        new_node.next = self.head
        self.head = new_node

    def printList(self):
        tmp = self.head
        while(tmp):
            print(tmp.val, end=" ")
            tmp = tmp.next

    def removeNthFromEnd(self, head: Optional[ListNode], n: int) -> Optional[ListNode]:
        slow_p = head
        fast_p = head

        for i in range(n):
            if fast_p.next is None:
                if i == n - 1:
                    head = head.next
                return head
            fast_p = fast_p.next

        while( fast_p.next != None ):
            slow_p = slow_p.next
            fast_p = fast_p.next

        if slow_p.next is not None:
            slow_p.next = slow_p.next.next

        return head

# list1 = Solution()
# list1.push(5)
# list1.push(4)
# list1.push(3)
# list1.push(2)
# list1.push(1)

list1 = Solution()
list1.push(1)

print("Linked List ")
list1.printList()
print('')

d = list1.removeNthFromEnd(list1.head, 1)

print("Linked List after")
print(d)