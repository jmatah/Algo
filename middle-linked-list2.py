from typing import Optional

# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

class Solution:
    def __init__(self):
        self.head = None

    def push(self, data:int)->None:
        new_node = ListNode(data, self.head)
        # new_node = ListNode()
        # new_node.val = data
        # new_node.next = self.head
        self.head = new_node

    def printList(self):
        tmp = self.head
        while( tmp ):
            print(tmp.val, end=", ")
            tmp = tmp.next
    
    def middleNode(self, head: Optional[ListNode]) -> Optional[ListNode]:
        slow = fast = head
        while( fast and fast.next ):
            slow = slow.next
            fast = fast.next.next
        return slow

sol = Solution()
sol.push(1)
sol.push(2)
sol.push(3)
sol.push(4)
sol.push(5)
sol.push(6)
sol.printList()
mid = sol.middleNode(sol.head)
print(mid.val)
