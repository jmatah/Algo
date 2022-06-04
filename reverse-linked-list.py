# LeetCode 206. Reverse Linked List Python
# Definition for singly-linked list.

from typing import Optional
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next
class Solution:
    def __init__(self):
        self.head = None

    def push(self, data ):
        new_node = ListNode(data)
        new_node.next = self.head
        self.head = new_node

    def printList(self):
        print('')
        curr = self.head
        while(curr):
            print(curr.val, end= " ")
            curr = curr.next

    def reverseList(self, head: Optional[ListNode]) -> Optional[ListNode]:
        prev = None
        current = self.head
        # for LeetCode
        # current = head
        while(current):
            next1 = current.next
            current.next = prev
            prev = current
            current = next1

        self.head = prev
        # for LeetCode:
        # head = prev
        # return head


head = [1,2,3,4,5]
sol1 = Solution()
for h in head:
    sol1.push(h)

sol1.printList()
sol1.reverseList(sol1.head)
sol1.printList()