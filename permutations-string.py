#
# LeetCode 784. Letter Case Permutation Python
#
class Solution:
    def letterCasePermutation(self, s: str) -> list[str]:
        s = s.lower()
        lens, ans = len(s), []

        def dfs( i, res='' ):
            if i < lens:
                if s[i].isdecimal():
                    dfs(i+1, res + s[i])
                else:
                    dfs(i+1, res+s[i].upper())
                    dfs(i+1, res+s[i].lower())
            else:
                ans.append(res)
        dfs(0, "")
        return ans

s = "a1b2"
sol = Solution()
ans = sol.letterCasePermutation(s)
print(ans)