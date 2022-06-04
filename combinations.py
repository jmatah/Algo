# LeetCode 77. Combinations Python
# dfs;

class Solution:
    def combine(self, n: int, k: int) -> list[list[int]]:
        ans = []
        self.count = 0

        def dfs(start, nums):
            if self.count == k:
                ans.append(nums)
                return

            for i in range(start, n+1):
                self.count += 1
                # print('Going in:', i+1, nums+[i])
                dfs(i+1, nums+[i])
                # print('Out with: ', i, nums)
                self.count -= 1

        dfs(1, [])

        return ans

n = 7
k = 3

sol = Solution()
ans = sol.combine(n, k )
print(ans)
        