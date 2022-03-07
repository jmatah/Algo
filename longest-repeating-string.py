class Solution:
    def lengthOfLongestSubstring(self, s: str)-> int:
        chars = [0] * 128
        length = 0
        left = 0

        for right in range( len( s ) ):
            chars[ord(s[right])] += 1

            while( chars[ord(s[right])] > 1 ):
                chars[ord(s[left])] -= 1
                left += 1

            length = max( length, (right - left + 1 ))

        return length

s = "abcabcbb"
#s = "bbbb"
#s = "pwwkew"
sol = Solution()
print(sol.lengthOfLongestSubstring(s))