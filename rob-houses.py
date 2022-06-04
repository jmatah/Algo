#
# LeetCode : 198. House Robber Python
#

class Solution:
    def rob(self, nums: list[int]) -> int:
        rob1, rob2 = 0, 0 

        # nums = [rob1, rob2, n, n+1, ...]
        for n in nums:
            temp = max(n+rob1, rob2)
            rob1 = rob2
            rob2 = temp
        return rob2

nums = [1,2,3,1]
nums = [2,7,9,3,1]
sol = Solution()
ans = sol.rob(nums)
print(ans)