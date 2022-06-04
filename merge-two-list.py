#
# Leetcode 21. Merge Two Sorted Lists Python
#
#
from typing import Optional
# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

class Solution:
    def __init__(self):
        self.head = None

    def push(self, data ):
        new_node = ListNode()
        new_node.val = data
        new_node.next = self.head
        self.head = new_node
    def append(self, data ):
        new_node = ListNode(data)

        if self.head is None:
            self.head = new_node
            return
        last = self.head
        while last.next:
            last = last.next

        last.next = new_node

    def printList(self):
        tmp = self.head
        print('')
        while( tmp ):
            print( tmp.val, end=", ")
            tmp = tmp.next

    def mergeTwoLists(self, list1: Optional[ListNode], list2: Optional[ListNode]) -> Optional[ListNode]:
        temp = None
        if list1 is None:
            return list2
        if list2 is None:
            return list1

        if list1.val <= list2.val:
            temp = list1
            temp.next = self.mergeTwoLists(list1.next, list2)
        else:
            temp = list2
            temp.next = self.mergeTwoLists(list1, list2.next)
        return temp


list1 = [1,2,4] 
list2 = [1,3,4]
sol1 = Solution()
for i in range(len(list1)):
    sol1.append(list1[i])
sol1.printList()

sol2 = Solution()
for i in range(len(list2)):
    sol2.append(list2[i])
sol2.printList()

sol3 = Solution()
sol3.head = sol3.mergeTwoLists(sol1.head, sol2.head)
sol3.printList()
