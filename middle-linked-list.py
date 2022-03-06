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
        new_node.val = date
        new_node.next = self.head
        self.head = new_node

    def printList(self):
        tmp = self.head
        while(tmp):
            print(tmp.val, end=" ")
            tmp = tmp.next

    def middleNode(self, head: Optional[ListNode]) -> Optional[ListNode]:
        slow = fast = head
        while fast and fast.next:
            slow = slow.next
            fast = fast.next.next
        return slow

sol = Solution()
sol.push(10)
sol.push(20)
sol.push(30)
sol.push(40)
sol.push(50)
sol.push(60)
sol.printList()
s = sol.middleNode(sol.head)
print(s)
