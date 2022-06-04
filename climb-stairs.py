#
# LeetCode 70. Climbing Stairs - Python
#

class Solution:
    def climbStairs(self, n: int) -> int:
        i, j = 1, 1

        for k in range(n):
            t = j
            j += i
            i = t
        return i

n = 10
sol = Solution()
ans = sol.climbStairs(n)
print(ans)
