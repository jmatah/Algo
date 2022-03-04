class Solution:
    def reverseString(self, s: list[str]) -> None:
        """
        Do not return anything, modify s in-place instead.
        """
        print(s)
        s = s[::-1]
        print(s)

s = ["h","e","l","l","o"]
sol = Solution()
sol.reverseString(s)