"""
# 116. Populating Next Right Pointers in Each Node Python LeetCode

# Definition for a Node.
"""
class Node:
    def __init__(self, val: int = 0, left: 'Node' = None, right: 'Node' = None, next: 'Node' = None):
        self.val = val
        self.left = left
        self.right = right
        self.next = next


class Solution:
    def __init__(self):
        self.head = null
    
    def push(self, data:int )-> None:
        if not self.head:
            self.head = Node(data)
        else:
            current = self.head
            while(True):
                if current.val < data:
                    if not current.left:
                        current.left = Node(data)
                        break
                    else:
                        current = current.left
                elif current.val > data:
                    if not current.right:
                        current.right = Node(data)
                        break
                    else:
                        current = current.right
                else:
                    break
                
    def connect(self, root: Optional[Node]) -> Optional[Node]:
        if not root:
            return

        queue = [root]
        while( queue ):
            prev = None
            for q in queue:
                if prev and not prev.next and q.left:
                    prev.next = q.left
                elif prev and not prev.next and not q.left:
                    prev.next = '#'

                if q.left and q.right:
                    q.left.next = q.right
                if q.left and not q.right:
                    q.left.next = '#'

                if q.right:
                    prev = q.right
                elif q.left:
                    prev = q.left
                else:
                    prev = None

            next_level = []
            for q in queue:
                if q.left:
                    next_level.append(q.left)
                if q.left and not q.right:
                    next_level.append(Node(0))
                if not q.left and q.right:
                    next_level.append(Node(0))
                if q.right:
                    next_level.append(q.right)
            queue = next_level
        return root