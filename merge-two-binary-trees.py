from typing import Optional

# Definition for a binary tree node.
class TreeNode:
    def __init__(self, val=0, left=None, right=None):
        self.val = val
        self.left = left
        self.right = right

    def insert(self, data:int):
        if self.val:
            if data < self.val:
                if self.left is None:
                    self.left = data
                else:
                    self.left.insert(data)
            elif data > self.val:
                if self.right is None:
                    self.right = data
                else:
                    self.right.insert(data)
        else:
            self.val = data

    def printTree(self):
        if self.left:
            self.left.printTree()
        print( self.val)
        if self.right:
            self.right.printTree()

class Solution:
    def mergeTrees(self, root1: Optional[TreeNode], root2: Optional[TreeNode]) -> Optional[TreeNode]:
        if not root1:
            return root2

        if not root2:
            return root1

        root1.val += root2.val
        root1.left = self.mergeTrees(root1.left, root2.left)
        root1.right = self.mergeTrees(root1.right, root2.right)
        return root1

    def printTree_dfs(self, root1: Optional[TreeNode]):
        """DFS: depth first search"""
        if not root1:
            return

        if root1.left:
            self.printTree_dfs(root1.left)
        print( root1.val)
        if root1.right:
            self.printTree_dfs(root1.right)

    def printTree_bfs(self, root1: Optional[TreeNode]):
        """BFS: breath first search"""
        if not root1:
            return

        queue = [root1]
        while queue:
            print(' '.join(str(node.val) if node.val != 0 else 'null' for node in queue), end =" ")
            #print((str(node.val) for node in queue), end =" ")
            next_level = list()
            for n in queue:
                if n.left:
                    next_level.append(n.left)
                if n.left and not n.right:
                    next_level.append(TreeNode(0))

                if not n.left and n.right:
                    next_level.append(TreeNode(0))
                if n.right:
                    next_level.append(n.right)
            queue = next_level

root1 = TreeNode(1)
root1.left = TreeNode(3)
root1.right = TreeNode(2)
root1.left.left = TreeNode(5)

root2 = TreeNode(2)
root2.left = TreeNode(1)
root2.right = TreeNode(3)
root2.left.right = TreeNode(4)
root2.right.right = TreeNode(7)

sol = Solution()
root3 = sol.mergeTrees(root1, root2)
sol.printTree_bfs(root3)
