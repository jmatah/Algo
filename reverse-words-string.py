class Solution:
    def reverseWords(self, s: str) -> str:
        print(s)
        temp = s.split(" ")
        result = []
        for word in temp:
            word = word[::-1]
            result.append(word)
        return ' '.join(result)

s = "Let's take LeetCode contest"
sol = Solution()
sol.reverseWords(s)